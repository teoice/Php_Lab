<?php
    session_start();
    if($_SESSION["user"] != "Piero" || $_SESSION["password"] != "depi"){
        header("location:login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>AMICI</h1>
</body>
</html>