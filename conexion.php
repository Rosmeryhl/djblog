<?php
function conectarse(){
    $servidor="localhost";
    $usuarios="root";
    $password="";
    $basededatos = "djblog";
    $conectar=new mysqli($servidor,$usuarios,$password,$basededatos);
    return $conectar;
}
$conexion=conectarse();
?>