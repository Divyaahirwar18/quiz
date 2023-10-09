<?php 
session_start();
$username =$_POST['username'];
$password=$_POST['password'];

$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="form";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sql="SELECT * FROM register_data WHERE username='$username' and password='$password'";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1){
$_SESSION['name']=$username;
header("location:quiz.php");
}else{
echo '<script>alert("password and username must be same");</script>';
}

?>