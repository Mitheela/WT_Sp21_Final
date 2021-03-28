
<!DOCTYPE html>
<html>
<head> <?php
if(!isset($_COOKIE["username"]))
 { 
	 header ("Location:final_cookiePage.php");
 }

?> </head>

<body>
Welcome, <?php echo $_COOKIE["username"]; ?>!
</body>

</html>