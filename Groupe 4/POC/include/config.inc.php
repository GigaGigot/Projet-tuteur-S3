<?php
// Parametres de l'application de Connexion
// A modifier en fonction de la configuration

define('DBHOST', "localhost");
define('DBNAME', "connexion");
define('DBUSER', "bd");
define('DBPASSWD', "bede");
define('ENV','dev');
// pour un environememnt de production remplacer 'dev' (d�veloppement) par 'prod' (production)
// les messages d'erreur du SGBD s'affichent dans l'environememnt dev mais pas en prod
?>