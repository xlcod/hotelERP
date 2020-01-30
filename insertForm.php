<?php
require 'bbdd.php';



$id = $_POST['id'];
$nombre = $_POST['nombre'];
$country = $_POST['country'];
$dni = $_POST['dni'];
$roomID = $_POST['roomID'];


$query  = "INSERT INTO  huespedes (id,nombre,country,dni,roomId) ";
$query .= "VALUES ('$id','$nombre','$country','$dni','$roomID')";

$result = $conn->query($query);

if (!$result) {
    echo ('failure');
} else {
    echo ('success');
    header("location: accounts.php");
}
