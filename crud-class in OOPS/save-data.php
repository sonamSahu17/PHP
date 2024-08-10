<?php
require 'database.php';
$obj = new Database();

$obj = new Database();

$sname = $_POST['sname'];
$sage = $_POST['sage'];
$scity = $_POST['sCity'];

$value = ["student_name"=>$sname, "age"=>$sage, "city"=>$scity];
if($obj->insert("students",$value)){
    echo "<h2>Data inserted Successfully.</h2>";
}

?>