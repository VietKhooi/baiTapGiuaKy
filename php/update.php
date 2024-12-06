
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

    //De them du lieu moi cho index
    $sql = "INSERT INTO table_student (id, full_name, dob, gender, hometown, level_id, group_id) 
    VALUES ($id, '$full_name','$dob','$gender','$hometown',$level_id,$group_id)";

    //thuc hien lenh va kiem tra 
    if($conn->query($sql) === true){
        
        //chuyen sang trang chinh
        header("Location: index.php");
        exit();
    }
    else{
        //kiem tra xem co loi khong
        echo "Loi:" . $sql . $conn->error;
    }

}
?>