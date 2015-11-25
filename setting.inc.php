<?php
// constantes globale
include ('config.inc.php');
// charge et initialise les bibliothèques
// - debug
// - smarty (les templates)
// - fluent pour la base << utilisé dans l'application 2 du TD
include ('apps/libs/debug/debug.inc.php');
include ('apps/libs/smarty/Smarty.class.php');
include ('apps/libs/FluentPDO/FluentPDO.php'); // << en commentaire pour le début du TD
include ('apps/libs/functions.php');
include ('apps/libs/controllers.php');
//include ('apps/models/model-posts.php');
// include ('apps/models/model-users.php'); en commentaire pour le début du TD
// ces 3 classes modèles qui permettent une approche objet de la base de données seront
//intégrées dans la partie Application2 du TD.
include ('apps/models/base.class.php');
include ('apps/models/movie.class.php');
//include ('apps/models/post.class.php');
//include ('apps/models/user.class.php');

// objet DB
$pdo = new PDO(
'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, // DSN
 DB_USER, // utilisateur MYSQL
 DB_PASSWORD // mot de passe MYSQL
);
$fpdo = new FluentPDO($pdo); //<< en commentaire pour le début du TD
// echanges en UTF8 entre PHP et MySQL
//$pdo->query("SET NAMES '" . DB_CHARSET . "'");
// objet SMARTY : variable globale $smarty
$smarty = new Smarty();
$smarty->template_dir = 'apps/templates/';
$smarty->compile_dir = 'apps/datas/smarty/compile';
$smarty->cache_dir = 'apps/datas/smarty/cache';
?>
