<?php
$nombre = $_POST["nombre"];   
$foto = $_POST["link_foto"];  
$archivo = $_POST["link_archivo"];  
$contenido = $_POST["contenido"];   
$servername = "localhost";
$username = "carlod1i_voto";
$password = "ex2ZHodU]twX";
$dbname = "carlod1i_voto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO partidos VALUES ('".$nombre."','".$foto."','".$archivo."','".$contenido."')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = '../index.php?resp=1';</script> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>