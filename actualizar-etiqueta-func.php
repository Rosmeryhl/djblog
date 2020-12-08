<?php
    $id=$_POST["id_act"];
    $nombre_etiqueta=$_POST["nombre_etiqueta"];
    include('conexion.php');
    $consulta="UPDATE etiquetas SET nombre_etiqueta='$nombre_etiqueta'";
    // mquery($conexion, $consulta);
    $ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta){
    echo "Se ha actualizado correctamente :)";
} else {
    echo "NO se ha actualizado ¡ERROR! :(";
}
$conexion->close();
header('location: etiquetas.php');
?>