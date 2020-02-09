<?php
include("../work/config.php");
$sid=$_POST['sid'];
$name=$_POST['name'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=base64_encode($_POST['password']);
$sql="INSERT INTO std_info (s_id, name, email, uname, password) VALUES ('$sid', '$name', '$email','$uname', '$pass')";

$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../view/view.php");
}
else {
	echo "data not  added";
}
?>