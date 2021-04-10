<?php
require_once "db_config.php"; //or use include "filename.php";
// better to use include_once or require_once
$query= "select * from user";
$rslt=get($query);
echo "<pre>";
print_r($rslt);
echo "</pre>";
/*$var=mysqli_fetch_assoc($rslt);
print_r($var);
echo "<br>";
$var2=mysqli_fetch_assoc($rslt);
var_dump($var2);
echo "<br>";
$var3=mysqli_fetch_assoc($rslt);
echo $var3["username"];
echo "<br>";*/
?>
<html><body>
<table border="2" >
<th>Serial</th>
<th>Username</th>
<th>User Type</th>

<?php
/*while($row=mysqli_fetch_assoc($rslt))
{echo "<tr>";
echo "<td>".$row["user_serial"]."</td>";
echo "<td>".$row["username"]."</td>";
echo "<td>".$row["user_type"]."</td>";
echo "</tr>";}*/
?>
</table>
</body></html>