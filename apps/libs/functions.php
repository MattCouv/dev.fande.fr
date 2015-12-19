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
  /**
   * [add_images description]
   * @param [array] $file [prend la valeur de $_FILES['poster']]
   */
function add_images($file){
  /*on regarde le type MIME de l'image et on fait le traitement si le type est jpeg pjpeg ou png*/
  if ($file['type']=='image/jpeg'||$file['type']=='image/pjpeg'||$file['type']=='image/png') {
    /*création de dir2save qui reférence le répertoir de sauvegarde des images*/
    $dir2save = ROOT_DIR . '/assets/img/films';
    /*nom temporel de l'image*/
    $image_source = $file['tmp_name'];
    /*lister les dimensions de l'image*/
    list($width, $height) = getimagesize($image_source);
    /*si l'image est un jpeg ou un pjpeg*/
    if ($file['type']=='image/jpeg'||$file['type']=='image/pjpeg') {
      // lire l'image d'origine
      $src_image = imagecreatefromjpeg( $image_source );
    }else{
      //si l'image est un png
      $src_image = imagecreatefrompng( $image_source );
    }
    // définir une nouvelle image avec les dimensions autorisés new_width et new_height
    $new_width=800;
    //new height= 800/(width/height)
    $new_height=$new_width/($width/$height);
    //Retourne un identifiant de ressource d'image $dst_image
    $dst_image = ImageCreateTrueColor( $new_width, $new_height );
    //retaillement de l'image
    imagecopyResampled( $dst_image, $src_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    //création d'une image jpeg
    imagejpeg( $dst_image, $image_source );
    // effacer les zones mémoire
    imagedestroy($src_image);
    imagedestroy($dst_image);
    //decomposition du nom de l'image et son extension
    $path_parts = pathinfo($file["name"]);
    //ajout du timestamp
    $filename = $path_parts['filename']."_".microtime(true).'.'.$path_parts['extension'];
    //destination de l'image
    $image_dest = "$dir2save/$filename";
    //vérification que le téléchargement c'est bien réalisé
    if (move_uploaded_file( $image_source, $image_dest )) {
    //debug( "Le fichier est valide; il a été téléchargé avec succès. \n" );
    $error=false;
    } else {
    //debug( " PROBLÈME pendant le téléchargement du fichier!!\n" );
    $error=true;
    }
  }else {
  //debug( " PROBLÈME le fichier n'est pas un png!!\n" );
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
function isPosterSet($file,$data){
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
