<?php


require_once("../cnx.php");




function listeAjouter_findAll()
{

    $listeAjouter = array();

    //preparation de la requete d'extraction de tous les enregistrements
    $reqSql = "select * from emplyes";

    //connexion  la base de données
    $cnx = connect_db();


    $cnx = connect_db();
    $stmt = $cnx->prepare($reqSql);

    //exécution
    $stmt->execute();

    $listeAjouter = $stmt->fetchAll();

    //fermeture du curseur
    $stmt->closeCursor();


    //fermer la connexion
    $cnx = null;
    return $listeAjouter;


}













?>



