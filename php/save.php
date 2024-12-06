<?php
include "databasename.php";

$id = intval($_POST["id"]) ?? 0;
$full_name = $_POST["full_name"] ?? '';
$dob = $_POST["dob"] ?? '';
$gender = $_POST["gender"] ?? '';
$hometown = $_POST["hometown"] ?? '';
$level_id = $_POST["level_id"] ?? 0;
$group_id = $_POST["group_id"] ?? 0;

$sql = "INSERT INTO table_student (id, full_name, dob, gender, hometown, level_id, group_id) 
VALUES ($id,'$full_name','$dob','$gender','$hometown',$level_id,$group_id)";

if($conn->query($sql) === TRUE){
    header("Location: index.php");
}
else{
    echo "Bug: ". $conn->error;
}
?>