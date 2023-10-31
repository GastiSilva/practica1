<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conection = new mysqli($server, $user, $pass, $db);

if($conection->connect_errno){
    die("Conexion fallida".$conection->connect_error);
}else{
    echo"conectado";
}

?>

