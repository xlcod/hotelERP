<?php
include('login.php'); 
if (isset($_SESSION['login_user'])) {
    header("location: profile.php"); 
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="login">
        <h2>Hotel ERP</h2>
        <form action="" method="post">
            <label>Usuario :</label>
            <input id="name" name="username" placeholder="Usuario" type="text">
            <label>Contraseña :</label>
            <input id="password" name="password" placeholder="Contraseña" type="password"><br><br>
            <input name="submit" type="submit" value=" Login ">
            <a href="registroIndex.php">Registrarse?</a>
            <span><?php echo $error; ?></span>
        </form>
    </div>
</body>
</html>