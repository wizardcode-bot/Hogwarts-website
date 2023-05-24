
<?php
   // $conex = pg_connect("host=localhost dbname=registro  user=postgres password=12345");
   $username = 'root';
   $password = '';
   $database = 'registro';

   $conex = mysqli_connect("localhost","root","","registro");

   try {
      $conn = new PDO("mysql:host=localhost;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
      die('Connection Failed: ' . $e->getMessage());
    }
?>

