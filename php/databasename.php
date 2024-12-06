<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "qlsv_nguyenvietkhoi";

$conn= new mysqli($host, $username, $password, $databasename);
if(!$conn){
    die("Ket noi that bai!");
}
else{
    echo "Ket noi thanh cong";
}

?>