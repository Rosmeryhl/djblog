<?php
    $id=$_GET["y"];
   // echo "Este es mi ID: ",$id;
   include('conexion.php');
   $consulta="SELECT*FROM etiquetas WHERE id='$id'";
   $ejecutar_consulta=$conexion->query($consulta);
   $registro=$ejecutar_consulta->fetch_assoc();
?>
<div>
        <form  action="actualizar-etiqueta-func.php" method="POST">
        
                <h1>ACTUALIZAR USUARIO</h1>
                <input name="id_act" type="hidden" value="<?php echo $registro['id']?>">
                <input name="nombre_etiqueta" type="text" placeholder="nombre_etiqueta" value="<?php echo $registro['nombre_etiqueta']?>">
                <input class="boton" type="submit" value="Actualizar Etiqueta">
         
        </form>
</div>