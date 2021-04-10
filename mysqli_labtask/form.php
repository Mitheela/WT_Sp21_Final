<?php
$uname="";
$pw="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{$uname=$_POST["uname"];
$pw=$_POST["pw"];
$server="localhost";
$user="root";
$password="";
$db="wt_lab";
$cnct=mysqli_connect($server,$user,$password,$db);
$query="insert into user values(NULL,'$uname',NULL)";
if (mysqli_query($cnct,$query)) {echo " user inserted.";}
else {echo " user insertion failed.";}	
}
?>

<html> 
<body> 
<form action="" method="post"> 
<input type="text" name="uname" placeholder="your username here">
<input type="password" name="pw" placeholder="your password here">
<input type="submit" value="register">
</form>
</body>
</html>