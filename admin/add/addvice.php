<?php
$partido = $_POST["partidos"];  
$nombre = $_POST["nombre"];   
$foto = $_POST["link_foto"];  
$archivo = $_POST["link_archivo"];  
$cargo = $_POST["cargo"];   

// $servername = "localhost";
// $username = "carlod1i_voto";
// $password = "ex2ZHodU]twX";
// $dbname = "carlod1i_voto";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO vicepresidentes VALUES ('','".$nombre."','".$cargo."','".$foto."','".$archivo."','".$partido."')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = '../vicepresidente.php?resp=1';</script> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>