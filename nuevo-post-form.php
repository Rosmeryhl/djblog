<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
   
    <!-- metodos de envio 
    post: envia los datos encapsulados, no se pueden ver los datos    
    get:  manda los datos   por url,sepueden ver los datos-->
    <div class ="contenedor">
        <form class="formulario" action="nuevo-post-func.php" method="POST">
            <div class="entrada">
                <h1>CREAR NUEVO POST</h1>
                <input name="titulo" type="text" placeholder="titulo" >  
                <input name="fecha_publicacion" type="timestamp" placeholder="fecha_publicacion" >
                <input name="contenido" type="text" placeholder="contenido" >
                <input name="estatus" type="text" placeholder="estatus">
            
                <input class="boton" type="submit" >
        
        </form>

    
</body>
</html>
