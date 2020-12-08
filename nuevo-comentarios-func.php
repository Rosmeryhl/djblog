<?php
$comentario=$_POST["comentario"];
include('conexion.php');
$consulta="SELECT*FROM comentarios WHERE  comentario ='$comentario'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    $consulta="INSERT INTO comentarios(comentario) values('$comentario')";
    $ejecutar_consulta=$conexion->query($consulta);
    if($ejecutar_consulta){
        echo "Se Guardo Correctamente :)";
    }else{
        echo "No se pudo ejecutar :(";
    }
}else{
    echo "El comentario: ",$comentario,"  ya existe";

}
$conexion->close();
header('location: comentarios.php');
?>