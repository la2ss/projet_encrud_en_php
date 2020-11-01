<?php



require_once("../cnx.php");

$idSup = $_GET['idSalarier'];

if(isset($idSup) && !empty($idSup)) {

    $vId = $idSup;

    $reqSql =  " DELETE FROM emplyes WHERE id = :vId";

    $cnx = connect_db();
    $stmt=$cnx->prepare($reqSql);

    $stmt->bindParam(':vId', $vId, PDO::PARAM_INT);

    //exécution
    $stmt->execute();

    //fermeture du curseur
    $stmt->closeCursor();

    header ('Location: ../views/afficher.php');


}




/*function listeEmploye_find($id){

    $vId = $id;


    // prepare requête sql
    $reqSql = "select * from emplyes where id = :vId";

    //initialisation de $listeEmploye
    $listeEmploye= array();


        //etablir la connexion à la base de données
        $cnx = connect_db();

        //préparation à l'execution de la requête
        $stmt=$cnx->prepare($reqSql);

        // bind parameters
        $stmt->bindParam(':vId', $vId, PDO::PARAM_INT);

        //exécution
        $stmt->execute();
        $listeEmploye = $stmt->fetch();

        //fermeture du curseur
        $stmt->closeCursor();

    //fermer la connexion
    $cnx = null;
    return $listeEmploye;



}




*/





/* function delet_Salarier(){


    $reqSql =  " DELETE FROM emplyes WHERE idSalarierSup = ?";

    $cnx = connect_db();
    $stmt=$cnx->prepare($reqSql);

    //exécution
    $stmt->execute(array($idSalarierSup));

    //fermeture du curseur
    $stmt->closeCursor();




//fermer la connexion
    $cnx = null;

}






?>