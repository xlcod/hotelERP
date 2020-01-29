<?php
require 'bbdd.php';
session_start();
$error = '';
if (isset($_POST['registro'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Usuario o contraseña invalida";
    } else {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $myPassword = $_POST['password'];

        //mi query
        $query  = "INSERT INTO  usuarios (username, password) ";
        $query .= "VALUES ('$username','$myPassword')";

        $stmt = $conn->prepare($query);
        echo ($query);
        $stmt->execute();
        header("Location: home.php");

        mysqli_close($conn);
    }
}
