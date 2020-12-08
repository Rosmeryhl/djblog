<?php
    $id=$_GET["r"];
   // echo "Este es mi ID: ",$id;
   include('conexion.php');
   $consulta="SELECT*FROM categorias WHERE id='$id'";
   $ejecutar_consulta=$conexion->query($consulta);
   $registro=$ejecutar_consulta->fetch_assoc();
?>
<div>
        <form  action="actualizar-categoria-func.php" method="POST">
        
                <h1>ACTUALIZAR CATEGORIA</h1>
                <input name="id_act" type="hidden" value="<?php echo $registro['id']?>">
                <input name="nombre_categoria" type="text" placeholder="nombre de la categoria" value="<?php echo $registro['nombre_categoria']?>">
                <input class="boton" type="submit" value="Actualizar Categoria">
         
        </form>
</div>