<?php
include 'header.php';
require('../cnx.php');
session_start();


if(!empty($_POST['prenom']) && !empty($_POST['ddn']) && !empty($_POST['inputemail']) && !empty($_POST['fonction']) && !empty($_POST['salaire'])){
    echo'<p id="error">merci de remplir tous les champs</p>';



    $prenom =       $_POST['prenom'];
    $ddn =          $_POST['ddn'];
    $inputemail =   $_POST['inputemail'];
    $fonction =     $_POST['fonction'];
    $salaire =      $_POST['salaire'];
    $id = "0";


    $_SESSION['prenom']= $prenom ;


    $connexion = connect_db();

    $execute= $connexion ->prepare("INSERT INTO emplyes (prenom, ddn, inputemail, fonction, salaire ) ");
    $execute->execute(array($prenom, $ddn, $inputemail, $fonction,$salaire ));

    header('location: afficher.php');

}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"href="css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Hello, world!</title>
</head>

<body CLASS="container">
<h2> MODIFICATION EMPLOYE</h2>


<?php




?>
<form class="container" method="post">
    <input type="hidden" name="idSalarier" value="<?php echo [''];?>">
    <div><i class="fas fa-user-circle" ></i></div>
    <div class="form-row">

        <div class="form-group col-md-6">

            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required>
        </div>
        <div class="form-group col-md-6 ">
            <label for="ddn">Date de naissance</label>
            <input type="text" class="form-control" name="ddn" placeholder="jj/mm/aaaa" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputemail">Email</label>
            <input type="text" class="form-control" name="inputemail" id="inputemail" required>
        </div>
        <div class="form-group col-md-4">
            <label for="fonction">fonction:</label>
            <select id="inputState" class="form-control" name="fonction" required>
                <option selected> </option>
                <option>PDG</option>
                <option>DG</option>
                <option>RH</option>
                <option>DSI</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Salaire</label>
            <input type="text" class="form-control" class="salaire" id="salaire" required>
        </div>
    </div>
    <div class="form-group">

    </div>
    <button type="submit" value="submit" class="btn btn-primary">Modifier</button>
    <button type="reset" value="reset "class="btn btn-danger float-right">reset</button>
</form>

</body>


<?php

include 'footer.php';


?>




</html>
