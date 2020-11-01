<?php
require_once("../cnx.php");
session_start();

$prenom = trim(strtoupper($_POST['prenom']));
$vSalariermodifier = $_POST['idSalarier'];


// sécurisation des données
$vPrenom = filter_var($prenom, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo $vPrenom  . "<br>";

// prepare requête sql
$reqSql = " UPDATE emplyes SET prenom = :vPrenom WHERE idSalarier = :vSalariermodifier";

try{
    $cnx = connect_db();
    $stmt=$cnx->prepare($reqSql);

    // bind parameters
    $stmt->bindParam(':vSalariermodifier', $vSalariermodifier, PDO::PARAM_INT);
    $stmt->bindParam(':vPrenom', $vPrenom, PDO::PARAM_STR);

    //exécution
    $stmt->execute();

    //fermeture du curseur
    $stmt->closeCursor();

    echo "Création réussie";

} catch(PDOException $error){
    $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
    $_SESSION['message_erreur'] = $message_erreur;
    Header("Location: pageerreur.php" );
}

//fermer la connexion
$cnx = null;
Header("Location: afficher.php");

?>
