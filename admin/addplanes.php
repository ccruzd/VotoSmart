<?php
$partido = $_POST["partidos"];  
$plan = $_POST["plan"];   

// $servername = "localhost";
// $username = "carlod1i_voto";
// $password = "ex2ZHodU]twX";
// $dbname = "carlod1i_voto";

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

$sql = "INSERT INTO plan_gobierno VALUES ('','".$partido."','".mysql_real_escape_string($plan)."')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = '../plan.php?resp=1';</script> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>