<?php

/**
  Retourne la commande de l'URL courante.
  @return string
 */
function get_command() {

  $url = parse_url( $_SERVER['REQUEST_URI'] );
 // debug ( $url, '$url' );
  $url =  str_replace( ROOT_URL, '', $url['path'] );
  // enlever le / éventuel au début
  $url  = str_replace( '/', '', $url);
  return $url;
}

/**
  Redirige vers une commande.
  @param  string  la commande.
 */
function redirect( $url ) {

  header('Location: ' . ROOT . $url );
}

?>