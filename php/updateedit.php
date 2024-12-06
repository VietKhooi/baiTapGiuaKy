<?php
include "databasename.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = intval($_POST["id"]); // dung intval de dam bao id la so nguyen
    $full_name = $_POST["full_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $hometown = $_POST["hometown"];
    $level_id = intval($_POST["level_id"]);
    $group_id = intval($_POST["group_id"]);

    //cap nhat thong tin user sau khi sua trong edit
    $sql = "UPDATE table_student SET id = '$id', full_name = '$full_name', dob = '$dob', gender = '$gender', hometown = '$hometown', level_id = '$level_id', group_id = '$group_id' WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");  //quay lai trang chinh
}

?>
