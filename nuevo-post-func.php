<?php
$titulo=$_POST["titulo"];
$fecha_publicacion=$_POST["fecha_publicacion"];
$contenido=$_POST["contenido"];
$estatus=$_POST["estatus"];
include('session.php');
include('conexion.php');
$consulta="SELECT*FROM posts WHERE  titulo ='$titulo'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    $consulta="INSERT INTO posts(titulo,fecha_publicacion,contenido,estatus) values('$titulo','$fecha_publicacion','$contenido','$estatus')";
    $ejecutar_consulta=$conexion->query($consulta);
    if($ejecutar_consulta){
        echo "Se Guardo Correctamente :)";
    }else{
        echo "No se pudo ejecutar :(";
    }
}else{
    echo "El titulo: ",$titulo,"  ya existe";

}
$conexion->close();
header('location: posts.php');
?>