<?php
include '../models/client.php';
include '../controllers/clientC.php';
if(isset($_POST)&&!empty($_POST)){
$client= new client($_POST["lastname"], $_POST["firstname"],$_POST["password"],$_POST["phone"],$_POST["address"],new \DateTime($_POST["dob"]));
// var_dump($_POST);
$clientC = new clientC();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php 
    if(isset($_POST)&&!empty($_POST)){
    echo '<h1>Les informations du client</h1>';
    $clientC->show($client);
    } 
    ?>
    <h1>Ajouter un client</h1>
<form method="post" action="index.php">
     Lastname :<input type="text" name="lastname" id=""> <br/> <br/>  
     Firstname : <input type="text" name="firstname" id=""><br/>  <br/> 
     Phone :<input type="number" name="phone" id=""><br/> <br/> 
     Date of birth :<input type="date" name="dob" id=""><br/><br/> 
     Address :<input type="text" name="address" id=""><br/>    <br/> 
     Password :<input type="password" name="password" id=""><br/> <br/>    
     Confirmation Password :<input type="password" name="cpassword" id=""><br/>  <br/> 
     <button type="reset">Reset</button> <br/>  
     <button type="submit">Envoyer</button><br/> 
</form>
</body>
</html>