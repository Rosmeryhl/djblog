<?php
    $id=$_GET["a"];
   // echo "Este es mi ID: ",$id;
   include('conexion.php');
   $consulta="SELECT*FROM comentarios WHERE id='$id'";
   $ejecutar_consulta=$conexion->query($consulta);
   $registro=$ejecutar_consulta->fetch_assoc();
?>
<div>
        <form  action="actualizar-comentarios-func.php" method="POST">
        
                <h1>ACTUALIZAR USUARIO</h1>
                <input name="id_act" type="hidden" value="<?php echo $registro['id']?>">
                <input name="comentario" type="text" placeholder="comentario" value="<?php echo $registro['comentario']?>">
                <input class="boton" type="submit" value="Actualizar Comentario">
         
        </form>
</div>