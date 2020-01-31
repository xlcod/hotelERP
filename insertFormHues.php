<?php
require 'bbdd.php';



$id = $_POST['id'];
$numero = $_POST['numero'];
$planta = $_POST['planta'];
$ocupada = $_POST['ocupada'];
$huesID = $_POST['huesID'];
    

$query  = "INSERT INTO  reservas (id,numero,planta,ocupada,idHuesped) ";
$query .= "VALUES ('$id','$numero','$planta','$ocupada','$huesID')";

$result = $conn->query($query);

if (!$result) {
    echo ('failure');
} else {
    echo ('success');
    header("location: accounts.php");
}
