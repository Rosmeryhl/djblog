<?php
    $id=$_GET["b"];
   // echo "Este es mi ID: ",$id;
   include('session.php');
   include('conexion.php');
   $consulta="SELECT*FROM posts WHERE id='$id'";
   $ejecutar_consulta=$conexion->query($consulta);
   $registro=$ejecutar_consulta->fetch_assoc();
?>
<div>
        <form  action="actualizar-post-func.php" method="POST">
        
                <h1>ACTUALIZAR USUARIO</h1>
                <input name="id_act" type="hidden" value="<?php echo $registro['id']?>">
                <input name="titulo" type="text" placeholder="titulo_post" value="<?php echo $registro['titulo']?>">
                <input name="fecha_publicacion"type="timestamp" placeholder="fecha_publicacion" value="<?php echo $registro['fecha_publicacion']?>">
                <input name="contenido"type="text" placeholder="contenido" value="<?php echo $registro['contenido']?>">
                <input name="estatus"type="text" placeholder="estatus" value="<?php echo $registro['estatus']?>">
                <input class="boton" type="submit" value="Actualizar Post">
         
        </form>
</div>