<?php
require('fb.php');

/**
 * Affiche un message de débuguage vers la console ou l'écran selon la
 * configuration indiquée dans les constantes DEBUG et DEBUG_TARGET.
 * @param objet   $data la frandeur à afficher
 * @param string  $message  un message d'accompagnement'
 * 
 * @return void
 */
function debug($data, $message = null) {

  if (DEBUG) {
    if (DEBUG_TARGET === 'console') {
      trace2console($data, $message);
    } else {
      trace2screen($data, $message);
    }
  }
}

/**
 * Affiche un message de débuguage vers  l'écran.
 * 
 * @return void
 */
function trace2screen($data, $message = null) {
  if (!is_null($message)) {
    echo "> <b>$message </b> :";
  }
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

/**
 * Affiche un message de débuguage vers la console.
 * 
 * @return void
 */
function trace2console($data, $message = null) {
  FB::log($data, $message);
}

?>