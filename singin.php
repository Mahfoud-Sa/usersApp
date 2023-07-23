<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'wantestdb';

$usrName=$_GET['name'];
$usrPassword=$_GET['password'];
$fullName=$_GET['fullName'];
$email=$_GET['email'];
$phoneNum=$_GET['phoneNum'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$image=$_GET['image'];
$idNumCard=$_GET['idNumCard'];

ini_set('display_errors',1);
error_reporting(E_ALL);
/*** THIS! ***/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
  echo($conn->connect_error);
}else{
  //echo 'Success <BR>';
  //echo $idNumCard;



$sql = "
INSERT INTO `users` (`id`, `name`, `password`, `fullName`, `email`, `phoneNum`, `address`, `gender`, `image`, `idNumCard`) VALUES 
(NULL, '$usrName', '$usrPassword', '$fullName', '$email', '$phoneNum', '$address', b'$gender', '$image', '$idNumCard');
"
;
//echo $sql;
$result = $conn->query($sql);
echo $result;
//$result->fetch_assoc();
//echo json_encode($result->fetch_assoc());

}
//http://localhost/usersApp/singin.php?name=salem123&password=770266408&fullName=salem%20omer&email=bin@gomail.com&phoneNum=56273&address=fsl%20hggi%20hs&gender=0&image=null
$conn->close();

/*

//"
http://localhost/usersApp/singin.php?userName=salem123&password=770266408&fullName=salem%20omer&email=bin@gomail.com&phoneNum=56273&address=fsl%20hggi%20hs&gender=0&image=null
INSERT INTO `users` (`name`, `password`, `fullName`, `email`, `phoneNum`, `address`, `gender`, `image`) VALUES
                     ('$usrName', '$usrPassword', '$fullName', '$email', '$phoneNum', '$address', b'$gender', '$image');
";
*/
?>