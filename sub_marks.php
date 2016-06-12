<?php

$username=$_POST["username"];
$course=$_POST["course"];
$assignments=$_POST["assignments"];
$quizes=$_POST["quizes"];
$mid=$_POST["mid"];
$final=$_POST["final"];
$conn = oci_connect("scott" , "tiger","localhost/xe");

$sql = oci_parse($conn,"INSERT INTO marks(ssn,course,assignments,quizes,mid_exam,final_exam) VALUES('$username','$course','$assignments','$quizes','$mid','$final')");
oci_execute($sql);


?>