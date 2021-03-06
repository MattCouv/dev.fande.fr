<?php
/* Set internal character encoding to UTF-8 */
mb_internal_encoding("UTF-8");
/** Nom de la base de données */
define('DB_NAME', 'm3202.fande');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');
/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');
/** conserver la session de la base. */
define('DB_PERSISTANT', true);

/** Préfixe de base de données pour les tables.*/
define('TABLE_PREFIX', 'mcouvreur_fande_');

/** indique si le débuguage est activé */
define('DEBUG'			, true);

/** indique vers quel périphérique vont être dirigés les messags de débuguage
    2 valeurs sont possibles :
      - 'console'   les messages s'affichent dans la console du navigateur
                    cela ne fonctionne que sous FF; les librairies fb.php et
                    class.FirePHP.php doivent être chargées.
      - 'screen'    les messages sont présentés directement à l'écran
  */
define('DEBUG_TARGET'	, 'screen');

/** nom relatif de la racine du site */
define('ROOT_URL', '/dev.fande.fr/'); //avec rewriting
define('ROOT', 'http://localhost:8080' . ROOT_URL);
define('ROOT_DIR', 'C:/xampp/htdocs/dev.fande.fr' );
/** Chemin absolu vers le dossier de l'application. */
define('ABSPATH', dirname(__FILE__) . '/');
?>
