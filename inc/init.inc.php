<?php
//------------ BDD
$mysqli = new mysqli("localhost", "db_user", "12345", "monecommerce");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
//------------SESSION
session_start();
//------------Chemin
// print_r($_SERVER);
define("Racine_site", "http://" . $_SERVER['HTTP_HOST'] . "/");
