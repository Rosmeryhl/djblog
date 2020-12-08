<?php
    $id=$_POST["id_act"];
    $comentario=$_POST["comentario"];
    include('conexion.php');
    $consulta="UPDATE comentarios SET comentario='$comentario'";
    // mquery($conexion, $consulta);
    $ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta){
    echo "Se ha actualizado correctamente :)";
} else {
    echo "NO se ha actualizado ¡ERROR! :(";
}
$conexion->close();
header('location: comentarios.php');
?>