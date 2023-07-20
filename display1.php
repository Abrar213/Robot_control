<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Robot directional control";
$Direction = $_POST['Direction'];

if($Direction=="f")
    {    
     echo "f";
    }
    elseif($Direction=="b")
    {
     echo "b";
    }
    elseif($Direction=="r")
    {
     echo "r";
    }
    elseif($Direction=="l")
    {
     echo "l";
    }
    elseif($Direction=="s")
    {
     echo "s";
    }


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO control (Direction) VALUES ('$Direction')";
if ($conn->query($sql) === TRUE) {
  echo " ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>