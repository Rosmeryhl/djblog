<?php
    $usu=$_POST["login"];
    $pass=$_POST["password"];
    include('session.php');
    include('conexion.php');
    $consulta="SELECT*FROM usuarios WHERE usuario='$usu' AND contrasena='$pass'";
    $ejecutar_consulta=$conexion->query($consulta);
    $num_regs=$ejecutar_consulta->num_rows;
    if($num_regs!=0){
        session_start();
        $registro=$ejecutar_consulta->fetch_assoc();
        $_SESSION["autentificar"]=true;
        $_SESSION["myusuario"]=$registro["usuarios"];
        $_SESSION["myemail"]=$registro["email"];
        header('location: index.php');


    }else{
        header('location: login.php?msj=¡error!');
    }

?>