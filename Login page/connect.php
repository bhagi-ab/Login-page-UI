<?php
$username = $_POST['username'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
	die('Connection Failed '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into log($username, $password)
	values(?,?)");
	$stmt->bind_param("ss", $userName, $password);
	$stmt->execute();
	echo("RegistartionSuccessfully..!");
	$stmt->close();
	$conn->close();
}

?>