<DOCTYPE html>
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
        <form class="formulario" action="nueva-categoria-func.php" method="POST">
            <div class="entrada">
                <h1>CREAR NUEVA CATEGORIA</h1>
                <input name="nombre_categoria" type="text" placeholder="nombre_categoria" >  
                <input class="boton" type="submit" >
        
        </form>

    
</body>
</html>