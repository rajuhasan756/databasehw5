<?php
include("../db/config.php");
$id=$_GET['id'];
$sql="SELECT * FROM std_info WHERE s_id=$id ";
$Result=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($Result))
{ $sid=$row['s_id'];
$name=$row['name'];
$email=$row['email'];
$uname=$row['uname'];
$pass=$row['password'];
}
echo'<form id="" name="" method="POST" action="../model/insert.php">
Student id:<br>
<input type="number" id="" name="sid" value="'.$sid.'" ><br>
Student Name:<br><br>
<input type="text" id="" name="name" value="'.$name.'"><br>
Student Email:<br>
<input type="email" id="" name="email"value="'.$email.'" ><br>
User name:<br>
<input type="text" id="" name="uname" value="'.$uname.'"><br>
user passwod:<br>
<input type="password" id="" name="password" value="'.$pass.'" ><br>
<input type="submit" value="Update now">

</form> 

';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>