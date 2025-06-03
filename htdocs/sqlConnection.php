<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '12345';
$database = 'contactinfo';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno) {
    echo "We're sorry. The website can not connect to the database";
    echo "Error: MySQL connection failed: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    
    exit;
}
echo "MySql connection work" . "\n";

$sql = "INSERT INTO contacts (name,email,phonenumber,subject,message) VALUES ('John Doe', 'infosarmat@icloud.com', '3703418859', 'Test data row', 'Testing data insertion')";

$test = mysqli_query($mysqli, $sql);

if($test == TRUE){
    echo "New record created succesfully"."\n";
} else {
    echo "Errore"."\n";
}

$mysqli->close();
?>
