<?php

function createwebpage(){
$webpagecontent = "<html>\n<head>\n<title>Writing a file using PHP</title>\n</head>\n";
$webpagecontent = $webpagecontent . "<body>\n<p>This web page was created writing a file with PHP</p></body>\n</html>";

$file = fopen("webpage.txt","w");
if ($file === false) {
    die("Errore nella creazione del file.");
}
fwrite($file,$webpagecontent);
fclose($file);
}
 
 createwebpage();
 
 $filename = "webpage.txt";
 $file = fopen( $filename, "r" );
 
if( $file == false ){
 echo ( "Error when opening file" );
 exit();
}

$filesize = filesize( $filename );
$filecontents = fread( $file, $filesize );
fclose( $file );
 
echo "$filecontents";
echo " "; echo " ";

echo "<table>";
    echo "<tr>";
    echo "<th>  </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";
    echo "<th> oirbg </th>";

    echo "</tr>";
echo "</table>";
?>