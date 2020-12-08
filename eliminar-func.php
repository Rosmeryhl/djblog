<?php
    $id=$_GET["el"];
    include('session.php');
    include('conexion.php');
    $consulta="DELETE FROM usuarios WHERE id='$id'";
    $ejecutar_consulta=$conexion->query($consulta);

    if($ejecutar_consulta){
        echo "Se elimino correctamente :)";
        header('location: usuarios.php');
    }else{
        echo "NO se ha eliminado ¡error! :(";
    }
    $conexion->close();
    //header('location: usuarios.php');
?>