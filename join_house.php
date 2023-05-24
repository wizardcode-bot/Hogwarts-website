<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8559-1">
    <!-- poner caracteres en español -->
    <meta charset="UTF-8">
    <!-- adjusts the website width to the device it is being used -->
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <meta name="description" content="Hogwarts website for entertainment, find your Hogwarts houses">
    <meta name="keywords" content="html5,css3, web design, Hogwarts">
    <meta name="author" content="Edinson Fabian">
    <!-- quien es el dueño del contenido que tiene Copyright -->
    <meta name="Copyright" content="Hogwarts">
    <!-- para que el buscador indexe nuestra página ( la muestre al principio) -->
    <meta name="robots" content="index"> 
    <link rel="icon" href="imagenes/hat.ico">

    <link rel="stylesheet" href="estilos.css">
    <title>wizard</title>
    
</head>

<body>
    <figure>
        <img src="http://25.media.tumblr.com/e5e401e35d609e217c19a24204360b8d/tumblr_mg3h0yvGFD1rgpyeqo1_500.gif" alt="logo"  id="logo">
    </figure>
    
    <header> 
    <h1  class="title1" id="inicio"> Hogwarts Website </h1>
    </header>

<nav> 
    <ul>
        <a href="index.php" class="header"><li id="navli">Home</li></a>
        <a href="houses.php" class="header"><li id="navli">Houses</li></a>
        <a href="characters.php" class="header"><li id="navli">Characters</li></a>
        <input type="search" class="header Sbars" placeholder="Search">
    </ul>
</nav>
    
    <section class="text_style">
        <h2>Hey there wizard apprentice!</h2>

        <div class="formulario">
        
            <form name="miform" method="POST" id="form1">
            
            <div>
                <div class="casillas">
                    <input type="text" name="name" placeholder="Name" required> </div>
                <div class="casillas">
                    <input type="text" name="Lastname" placeholder="LastName" required> </div>
                <div class="casillas">
                    <input type="number" name="identification" placeholder="Cédula" required> </div>
                <div class="casillas">
                    <input type="number" name="edad" placeholder="Edad" required> </div>
                <div class="casillas"> <label for="birth">Fecha de nacimiento</label> <br> <input type="date" name="birthday" id="birth" required> </div>
                <div class="casillas">
                    <input type="number" name="telefono" placeholder="Teléfono" required> </div>
                <div class="casillas">
                    <input type="email" name="email" placeholder="E-mail" required> </div>
                <div class="casillas">
                    <button class="subBoton" name="registrar">
                        <p>Enviar</p>
                    </button>
                </div>
                
            </div>
                
            </form>
        </div>
    </section> 
    
    <?php
    include("registro.php");
    ?>

</body>   
</html> 