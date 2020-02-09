<?php
include("../work/config.php");
$sql="SELECT * FROM std_info ";
$Result=mysqli_query($myconn,$sql);
echo'<table border="2px"> <tr> 
<td>Stude Id</td>
<td>Student Name</td>
<td>Email</td>
<td>Uname</td>
<td>Password</td>
<td>Action</td>
</tr>';
while($row=mysqli_fetch_array($Result))
{ $sid=$row['s_id'];
$name=$row['name'];
$email=$row['email'];
$uname=$row['uname'];
$pass=$row['password'];
echo'<tr>
<td>'.$sid.'</td>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$uname.'</td>
<td>'.$pass.'</td>
<td><a href="updateform.php?id='.$sid.'">edit</a></td>

</tr>';
}

?>
</table>