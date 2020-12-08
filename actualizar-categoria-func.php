<?php
    $id=$_POST["id_act"];
    $nombre_categoria=$_POST["nombre_categoria"];
    include('conexion.php');
    $consulta="UPDATE categorias SET nombre_categoria='$nombre_categoria'";
    // mquery($conexion, $consulta);
    $ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta){
    echo "Se ha actualizado correctamente :)";
} else {
    echo "NO se ha actualizado ¡ERROR! :(";
}
$conexion->close();
header('location: categorias.php');
?>