<?php 
$username=$_POST['user'];
$password=$_POST['pass'];

$username = stripcslashes($username) ;
$password = stripcslashes($password) ;
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("test2");

$result=mysql_query("select * from user where name='$username' and password='$password'") or die("fail to load ".mysql_error());

$row=mysql_fetch_array($result);
if($row['name']==$username && $row['password']==$password){
	echo '<script type="text/javascript">window.location=\'Homepage.php\';</script>' .$row['name'];
}else{
	echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
}
?>