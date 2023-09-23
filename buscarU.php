<?php
echo "<link rel=stylesheet href=juegos.css>";
$servername = "localhost";
$username = "antonio2";
$password = "Master02S";
$dbname = "videojuegos";
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


//echo "la clave es: ". $clave . "nombre es ". $nombre;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//include ('connect.php');

$cmd5 = md5($contrasena);
$sql = "SELECT * FROM usuarios WHERE login='$usuario' and password = '$cmd5'";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //$row = $result->fetch_assoc()
  echo '<script>
		alert("clave correcta")
   </script>';

} else {
    echo '<script>
    alert("clave o login incorrecto")
    </script>';
}

$conn->close();
?>