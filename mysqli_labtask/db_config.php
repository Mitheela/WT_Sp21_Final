<?php
$server="localhost";
$user="root";
$password="";
$db="wt_lab";
echo "included from another file.";

function execute($query){
	global $server,$user,$password,$db;
	$cnct=mysqli_connect($server,$user,$password,$db);
	mysqli_query($cnct,$query);
} //add, update, delete
function get ($query){
	global $server,$user,$password,$db;
	$cnct=mysqli_connect($server,$user,$password,$db);
	$rslt=mysqli_query($cnct,$query);
	$data[];
	if(mysqli_num_rows($rslt)>0){
		while($row=mysqli_fetch_assoc($rslt)){
	$data[]=$row;}}
	return $data;
} //select
?>