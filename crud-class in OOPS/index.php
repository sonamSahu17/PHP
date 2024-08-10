<?php
require 'database.php';
$obj = new Database();

// //insert:-
// $obj->insert('students',['student_name'=>'krishna','age'=>'16','city'=>'gokul']);
// echo "insert result is : ";
// print_r($obj->getResult());


//update:-
// $obj->update('students',['student_name'=>'Radhika','age'=>'17','city'=>'barsana'],'id="10"');
// echo "updated result is : ";
// print_r($obj->getResult());

//delete:-
// $obj->delete('students','id="11"');
// echo "Deleted result is : ";
// print_r($obj->getResult());

// //fetch all table data:-
// $obj->selectBySql('SELECT * FROM students');
// echo "Selected result is : ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";



//select table:-
$colname = "students.id,students.student_name,students.age,citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit = 5;

$obj->select('students', $colname, $join, null, null, $limit);
echo "Selected result is : ";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";

$obj->pagination('students',$join,null,$limit);
?> 