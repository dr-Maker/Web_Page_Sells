<?php

$servidor ="localhost";
$user="root";
$pass="";
$DataBase="proyectoweb";

$conn = mysqli_connect($servidor,$user,$pass,$DataBase);
if($conn){

    echo "conexion exitosa";
}





