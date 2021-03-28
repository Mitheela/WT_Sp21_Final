<!DOCTYPE html>
<html>
    <head>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST["username"];
$password=$_POST["password"];
}
if($username=="neha" && $password=="0000")
{
	setcookie("username",$username,time()+60);
	header("Location:dashboard.php");
}
else echo ("Enter a valid username and password.");
?>

 </head>
 
    <body>
        <form action="" method="post">
           Username:<input type="text" name="username"><br>
           Password:<input type="password" name="password"><br>
           <input type="submit" name="submit" value="Enter">
        </form>
    </body>
</html>