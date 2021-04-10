<?php 
$server="localhost";
$user="root";
$password="";
$db="wt_lab";
$cnct=mysqli_connect($server,$user,$password,$db);
if($cnct) {echo "Connected.";}
else {echo mysqli_connect_error();}
$query="insert into user values(NULL,'qrst','admin')";
if (mysqli_query($cnct,$query)) {echo " inserted.";}
else {echo " insertion failed.";}
?>