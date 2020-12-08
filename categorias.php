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
$consulta="SELECT * FROM categorias ORDER BY id ASC";
$ejecutar_consulta= $conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
    echo "No se Encontraron Registros en esta Busqueda";
}else{?>
    <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE_CATEGORIA</th>
                <th>ACCIONES</th>
            </tr>
    <?php
    while($registro=$ejecutar_consulta->fetch_assoc()){?>
            <tr class="gh">
                <td>
                    <?php echo $registro["id"]; ?>
                </td>
                <td>
                    <?php echo $registro["nombre_categoria"]; ?>
                </td>

                <td >
                    <div class="edi">
                        <a class="bt" href="actualizar-categoria-form.php?r=<?php echo $registro["id"];?>">editar</a>
                    </div>
                    <div class="dele">
                    <a class="bt" href="#" onclick="teborre(<?php echo $resgistro['id'];?>)">eliminar</a><B>... </B>
                    </div>
                </td>

            </tr>
 <?php
    }
    echo "</table>";
}