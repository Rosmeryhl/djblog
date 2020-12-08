<?php
    $id=$_GET["p"];
   // echo "Este es mi ID: ",$id;
   include('session.php');
   include('conexion.php');
   $consulta="SELECT*FROM usuarios WHERE id='$id'";
   $ejecutar_consulta=$conexion->query($consulta);
   $registro=$ejecutar_consulta->fetch_assoc();
?>
<div>
        <form  action="actualizar-usuario-func.php" method="POST">
        
                <h1>ACTUALIZAR USUARIO</h1>
                <input name="id_act" type="hidden" value="<?php echo $registro['id']?>">
                <input name="login" type="text" placeholder="usuario" value="<?php echo $registro['login']?>">
                <input name="password"type="password" placeholder="contraseña" value="<?php echo $registro['password']?>">
                <input name="nickname"type="text" placeholder="nickname" value="<?php echo $registro['nickname']?>">
                <input name="email"type="email" placeholder="email" value="<?php echo $registro['email']?>">
                <input class="boton" type="submit" value="Actualizar Usuario">
         
        </form>
</div>