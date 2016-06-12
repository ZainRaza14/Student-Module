<?php

$username=$_POST["username"];
$course=$_POST["course"];
$datee=$_POST["datee"];
$present=$_POST["present"];

$conn = oci_connect("scott" , "tiger","localhost/xe");

$sql = oci_parse($conn,"INSERT INTO attendance(ssnn,course,datee,present) VALUES('$username','$course','$datee','$present')");
oci_execute($sql);


?>