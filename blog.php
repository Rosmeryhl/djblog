<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosmeryHL</title>
</head>
<body>
<?php
include('conexion.php');
$consulta="SELECT * FROM posts INNER JOIN usuarios ON posts.usuario_id=usuarios.id INNER JOIN categorias ON posts.categoria_id=categorias.id GROUP BY posts.id";
$ejecutar_consulta= $conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    echo "No se Encontraron Registros en esta Busqueda";
}else{?>
<a class="btn btn-primary" href='nuevo-usario-form.php'>Nuevo Post</a><br><br>
    <table class="table table-striped">
    <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>FECHA PUBLICACION</th>
                <th>CONTENIDO</th>
                <th>ESTATUS</th>
                <th>USUARIO</th>
                <th>CATEGORIA</th>
                <th>ACCIONES</th>
            </tr>
    </thead>
<tbody>
    <?php
    while($registro=$ejecutar_consulta->fetch_assoc()){?>
        <tr>
            <th scope="row"><?=$registro['id'];?></th>
            <td><?php echo $registro["titulo"];?></td>
            <td><?php echo $registro["fecha_publicacion"];?></td>
            <td><?php echo $registro["contenido"];?></td>
            <td><?php echo $registro["estatus"];?></td>
            <td><?php echo $registro["nombre_categoria"];?></td>
            <td><?php echo $registro["categoria_id"];?></td>

            <td >
                <a class="btn btn-success" href='actualizar-usuario-form.php?p="<?php echo $registro["id"];?>"'>editar</a>

                <a class="btn btn-danger" href="#" onclick="elim(<?php echo $registro['id'];?>)">eliminar</a>
            </td>

        </tr>
<?php
    }
?>
    </tbody>
    </table>
<?php
}
$conexion->close();
?>
<script>
    function elim(id){
        var=q confirm("Estas Seguro de Eliminar?");
        if (q==true){
            window.location.href='eliminar-func.php?id='+id;
        }
    }
</script>