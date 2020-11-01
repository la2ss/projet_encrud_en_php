<?php
session_start();
require_once("../verif/verifsupprimer.php");


//récupération de l'id de la table emplyes
$id = $_GET['id'];

$listeEmploye = listeEmploye_find($id);
$_SESSION['listeEmploye'] = $listeEmploye;

Header("Location: afficher.php");


?>

