<?php

include("con_db.php");

#validando la variable
if (isset($_POST['registrar'])) {

   #verificar si la variable tiene información
   if (strlen($_POST['name']) >= 1 && strlen($_POST['Lastname']) >= 1 && strlen($_POST['identification'])  >=1 && strlen($_POST['edad']) >= 1 && strlen($_POST['birthday']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']))  {
      $name = trim($_POST['name']);
      $Lastname = trim($_POST['Lastname']);
      $identification = trim($_POST['identification']);
      $edad = trim($_POST['edad']);
      $birthday = trim($_POST['birthday']);
      $telefono = trim($_POST['telefono']);
      $email = trim($_POST['email']); 
      $fecha_reg = date("d/m/y");

      $records = $conn->prepare('SELECT * FROM datos WHERE email = :email');

      $records->bindParam(':email', $_POST['email']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);

      //comprueba que no hay imail repetido
    if (($_POST['email'] != (isset(($results['email']))))){
      
      $consulta = "INSERT INTO datos (nombre, apellido, identification, edad, birthday, telefono, email, fecha_reg)VALUES ('$name','$Lastname','$identification','$edad','$birthday','$telefono','$email','$fecha_reg')";
      $resultado = mysqli_query($conex,$consulta);
   
        if ($resultado) {
        ?>
            <div class="ok">Solucitud Enviada</div>
            <br><br>
            <?php
        } 
      }else {
        ?>
            <div class="ok">Ya existe un usuario con este email</div>
        <?php
      }
     
   }
}
?>


