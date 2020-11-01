<?php


require_once("../cnx.php");


$id= '';
$prenom = trim(strtoupper($_POST['prenom']));
$ddn = (($_POST['ddn']));
$inputemail = trim(strtoupper($_POST['inputemail']));
$inputsalaire = trim(strtoupper($_POST['salaire']));



// prepare requête sql
$reqSql = "insert into emplyes values (:Vid, :vprenom, :vddn, :vinputemail, :vinputsalaire)";

$cnx = connect_db();
$stmt=$cnx->prepare($reqSql);


// bind parameters
$stmt->bindParam(':Vid', $id, PDO::PARAM_INT);
$stmt->bindParam(':vprenom', $prenom, PDO::PARAM_STR);
$stmt->bindParam(':vddn', $ddn, PDO::PARAM_STR);
$stmt->bindParam(':vinputemail', $inputemail, PDO::PARAM_STR);
$stmt->bindParam(':vinputsalaire', $inputsalaire, PDO::PARAM_STR);

//execution de la requete
$stmt->execute();

//fermeture du curseur
$stmt->closeCursor();

Header("Location: ../views/afficher.php");




