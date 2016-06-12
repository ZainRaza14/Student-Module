<?php
session_start();
$username=$_POST["username"];
$password = $_POST["password"];
$conn = oci_connect("scott","tiger","localhost:1521/xe");


$sql = oci_parse($conn,"Select ssn,password from Faculty");
oci_execute($sql);

$nrows = oci_fetch_all($sql , $res);

if($nrows > 0)
	{
		$_SESSION['views']=$username;
		header("location:index2.php");
	}




?>