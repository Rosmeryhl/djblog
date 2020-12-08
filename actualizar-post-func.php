<?php
    $id=$_POST["id_act"];
    $titulo=$_POST["titulo"];
    $fecha_publicacion=$_POST["fecha_publicacion"];
    $contenido=$_POST["contenido"];
    $estatus=$_POST["estatus"];
    include('session.php');
    include('conexion.php');
    $consulta="UPDATE posts SET titulo='$titulo', fecha_publicacion='$fecha_publicacion', contenido='$contenido', estatus='$estatus' WHERE id='$id'";
    // mquery($conexion, $consulta);
    $ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta){
    echo "Se ha actualizado correctamente :)";
} else {
    echo "NO se ha actualizado ¡ERROR! :(";
}
$conexion->close();
header('location: posts.php');
?>