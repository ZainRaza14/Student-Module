<?php
$classdate = $_POST["classdate"];
$present  = $_POST["present"];
$conn = oci_connect("scott" , "tiger","localhost/xe");

$sql = oci_parse($conn,"INSERT INTO FATTENDANCE(CLASSDATE,PRESENT) VALUES('$classdate','$present')");
oci_execute($sql);

?>