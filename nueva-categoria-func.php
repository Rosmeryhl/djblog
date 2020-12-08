<?php
$nombre_categoria=$_POST["nombre_categoria"];
include('conexion.php');
$consulta="SELECT*FROM categorias WHERE  nombre_categoria ='$nombre_categoria'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    $consulta="INSERT INTO categorias(nombre_categoria) values('$nombre_categoria')";
    $ejecutar_consulta=$conexion->query($consulta);
    if($ejecutar_consulta){
        echo "Se Guardo Correctamente :)";
    }else{
        echo "No se pudo ejecutar :(";
    }
}else{
    echo "La categoria: ",$nombre_categoria,"  ya existe";

}
$conexion->close();
header('location: categorias.php');
?>