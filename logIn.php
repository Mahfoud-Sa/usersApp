<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'wantestdb';

$usrName=$_GET['userName'];
$usrPassword=$_GET['password'];

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
  echo($conn->connect_error);
}else{

  //echo $usrPassword;

$sql = "SELECT * FROM users WHERE name='$usrName' and password='$usrPassword'";

$result = $conn->query($sql);


echo json_encode($result->fetch_assoc());

}

$conn->close();
?>
