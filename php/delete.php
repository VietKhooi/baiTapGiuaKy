<?php
include "databasename.php";

$id = intval($_GET["id"]);
$sql="DELETE FROM table_student WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: index.php");
}
else{
    echo "Bug: " . $conn->error;
}
?>