<?php
    $id=$_POST["id_act"];
    $login=$_POST["login"];
    $password=$_POST["password"];
    $nickname=$_POST["nickname"];
    $email=$_POST["email"];
    include('session.php');
    include('conexion.php');
    $consulta="UPDATE usuarios SET login='$login', password='$password', nickname='$nickname', email='$email' WHERE id='$id'";
    // mquery($conexion, $consulta);
    $ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta){
    echo "Se ha actualizado correctamente :)";
} else {
    echo "NO se ha actualizado ¡ERROR! :(";
}
$conexion->close();
header('location: usuarios.php');
?>