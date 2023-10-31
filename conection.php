<?php 
//variables para establecer conexion
    $servername = "localhost";
    $username = "username";
    $password = "";
    
// creo conexion
$conexion = new mysqli($servername, $username, $password, $dbname);


    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    echo $nombre . "<br>";
    echo $edad . "<br>;

?>

