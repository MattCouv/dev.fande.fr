<?php

/**
  Retourne la commande de l'URL courante.
  @return string
 */
function get_command() {

  $url = parse_url( $_SERVER['REQUEST_URI'] );
 // debug ( $url, '$url' );
 // // traitement ajax?
 if ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) {
  return $url['query'];
  } else {
    $url =  str_replace( ROOT_URL, '', $url['path'] );
    // enlever le / éventuel au début
    $url  = str_replace( '/', '', $url);
    return $url;
  }
}

/**
  Redirige vers une commande.
  @param  string  la commande.
 */
function redirect( $url ) {

  header('Location: ' . ROOT . $url );
}

/**
  function pour uploader des images
  @param array $file contient $_FILE['poster'], name, tpm_name, type.
  @return array $err type boolean et $filename qui est un string avec le nouveau nom de l'image
*/
function add_images($file){
  debug($file,'file');
  if ($file['type']=='image/jpeg'||$file['type']=='image/pjpeg'||$file['type']=='image/png') {

    $dir2save = ROOT_DIR . '/assets/img/films';
    debug( $dir2save, "dossier d'enregistrement" );
    $image_source = $file['tmp_name'];
    list($width, $height) = getimagesize($image_source);
    // lire l'image d'origine
    if ($file['type']=='image/jpeg'||$file['type']=='image/pjpeg') {
      $img = imagecreatefromjpeg( $image_source );
    }else{
      $img = imagecreatefrompng( $image_source );
    }
    // définir une nouvelle image avec les dimensions autorisés
    $new_width=800;
    $new_height=$new_width/($width/$height);
    debug($new_width,'largeur');
    debug($new_height,'hauteur');
    $img2 = ImageCreateTrueColor( $new_width, $new_height );
    imagecopyResampled( $img2, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    imagejpeg( $img2, $image_source );
    // effacer les zones mémoire
    imagedestroy($img);
    imagedestroy($img2);
    //decomposition du nom de l'image et son extension
    $path_parts = pathinfo($file["name"]);
    //ajout du timestamp
    $filename = $path_parts['filename']."_".microtime(true).'.'.$path_parts['extension'];
    $image_dest = "$dir2save/$filename";
    if (move_uploaded_file( $image_source, $image_dest )) {
    debug( "Le fichier est valide; il a été téléchargé avec succès. \n" );
    $error=false;
    } else {
    debug( " PROBLÈME pendant le téléchargement du fichier!!\n" );
    $error=true;
    }
  }else {
  debug( " PROBLÈME le fichier n'est pas un png!!\n" );
  $error=true;
  $filename="";
  }
  return array($error,$filename);
}


/**
@param array  $file qui contient le type, le name et toutes info $_FILE['poster']
@param array $data qui contient $_POST
@return array $err type boolean et $movie qui rajoute a $_FILE['poster'] la variable $fname;
*/
function isposterset($file,$data){
  $movie=$data;
  if (!empty($file['poster']['name'])) {
    list($err,$fname)=add_images($file['poster']);
    if($err!=true){
      $movie['poster']=$fname;
      $err=false;
    }
    else{
      $err=true;
    }
  }
  return array($err,$movie);
}
/**
Effacer une image dans le dossier /assets/img/films.
@param $image est le string 
le nom du fichier image à effacer.
@return l'erreur $err type boolean
*/
function deleteImage( $image )
{
  $dir2destroy = ROOT_DIR . '/assets/img/films/'.$image;
  $err=unlink($dir2destroy);
  if ($err==false) {
    return $err;
  }else{
    echo 'good';
  }
}
?>
