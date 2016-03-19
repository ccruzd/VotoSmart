<?php
$partido = $_POST["partidos"];  
$nombre = $_POST["nombre"];   
$foto = $_POST["link_foto"];  
$archivo = $_POST["link_archivo"];  
$cargo = $_POST["cargo"];   
$dni = $_POST["dni"];  
$sexo = $_POST["sexo"];  
$pais = $_POST["pais"];  
$departamento = $_POST["departamento"];  
$provincia = $_POST["provincias"];   
$distrito = $_POST["distrito"];    
$ingreso = $_POST["ingreso"];   
$inmuebles = $_POST["inmuebles"];   
$muebles = $_POST["muebles"];   
$infogob = $_POST["infogob"];   
$estado = $_POST["estado"];   

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

$sql = "INSERT INTO candidatos VALUES ('','".$partido."','".$nombre."','".$archivo."','".$foto."','".$cargo."',
	'".$dni."','".$sexo."','".$pais."','".$departamento."','".$provincia."','".$distrito."','".$ingreso."','".$inmuebles."',
	'".$muebles."','".$infogob."','".$estado."')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = '../candidato.php?resp=1';</script> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>