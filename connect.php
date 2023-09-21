<?php
$servername = "localhost";
$username = "antonio2";
$password = "Master02";
$dbname = "videojuegos";



//echo "la clave es: ". $clave . "nombre es ". $nombre;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $conn

?>