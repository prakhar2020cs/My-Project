<?php 
$server = "localhost";
$password = "";
$username = "root";

$con = mysqli_connect($server, $username, $password);

if(!$con){
die("Failed to connect to server".mysqli_connect_error());
}

echo "Successfully connected to db";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = " INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name','$age','$gender','$email', '$phone', '$other', current_timestamp());";
echo $sql;

if($con->query($sql) == true){
    echo "successfully inserted";

}else{
    echo "ERROR: $sql <br> $con->error";

}
$con -> close();
?>