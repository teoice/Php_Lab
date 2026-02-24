<?php
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    session_start();
    if($user != "Piero" || $pass != "depi"){
        header("location:login.php");
        exit();
    }else{
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $pass;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
            <div id="left_row">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <div id="right_row">
                <a href="profile.php"><img src="img/profile.jpg" alt="foto profilo"></a>
                <form action="logout.php" method="post">
                    <button type="submit" id="logout">LogOut</button>
                </form>
            </div>
    </div>
    
    <div class="content">
        <h1>Prima Pagina del mio Social</h1>

    </div>
    
</body>
</html>