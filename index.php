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
        <img src="imagenes/logo.gif" alt="logo"  id="logo">
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

<section>
    <h2 id="mainsub">About the website</h2>  
    <p id="maintxt" class="tcenter">This website was created to inform people about the greatness of this magic school named Hogwarts, were thousands of wizards, witches and other magic creatures have grown up and developed their skills. <br>
    You could also check the Hogwarts houses and find out which you feel more identified with. </p>

    <img src="imagenes/mainimg.gif" alt="ron Weasley greets the elf" id="mainimg">
</section>

<br><br>

<footer>

    <form action="/formulario" method="POST">
        <label for="feedback">
            <p>How did you like this Website?</p>
        </label>
        <textarea placeholder="Leave your feedback here..."class="feedback" id="feedback"></textarea> <br>
        <input type="submit">
    </form> <br>
    <a href="mailto:fabianguzzman@gmail.com"class="text_color">Contact me here</a> <br>
    
    <small>
        <p>All right reserved &copy; 2021</p>
    </small>

</footer>

</body>    
</html>

