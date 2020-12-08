<?php
$nombre_etiqueta=$_POST["nombre_etiqueta"];
include('conexion.php');
$consulta="SELECT*FROM etiquetas WHERE  nombre_etiqueta ='$nombre_etiqueta'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    $consulta="INSERT INTO etiquetas(nombre_etiqueta) values('$nombre_etiqueta')";
    $ejecutar_consulta=$conexion->query($consulta);
    if($ejecutar_consulta){
        echo "Se Guardo Correctamente :)";
    }else{
        echo "No se pudo ejecutar :(";
    }
}else{
    echo "La etiqueta: ",$nombre_etiqueta,"  ya existe";

}
$conexion->close();
header('location: etiquetas.php');
?>