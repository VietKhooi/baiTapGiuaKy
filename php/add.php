<?php include "databasename.php"; //ket noi CSDL?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    <h1>Add Student</h1>
        <form action="update.php" method="POST">

        <?php // Nhap them thong tin id?>
        <label for="id">ID: </label>
        <input type="text" name="id" placeholder="Nhap ID" required><br>

        <?php // Nhap them ten ?>
        <label for="full_name">FULL_NAME: </label>
        <input type="text" name="full_name" placeholder="Nhap name" required><br>

        <?php //Nhap thong tin ngay-thang-nam sinh ?>
        <label for="dob">DOB: </label>
        <input type="date" name="dob" placeholder="Nhap dob" required><br>

        <?php //Chon gioi tinh ?>
        <label for="gender">GENDER: </label>
        <input type="radio" name = "gender" value = "0" required> Nu
        <input type="radio" name = "gender" value = "1" required> Nam <br>

        <?php //Nhap thong tin que quan ?>
        <label for="hometown">HOMETOWN: </label>
        <input type="text" name = "hometown" placeholder="Nhap que" required><br>

        <?php //Lua chon chuc vu ?>
        <label for="level_id">LEVEL: </label>
        <select name="level_id">
            <option value="0">Tien si</option>
            <option value="1">Thac si</option>
            <option value="2">Ky su</option>
            <option value="3">Khac</option>
        </select><br>

        <?php //Chon nhom cho user?>
        <label for="group_id">GROUP: </label>
        <select name="group_id">
            <option value="1">Nhom 1</option>
            <option value="2">Nhom 2</option>
            <option value="3">Nhom 3</option>
            <option value="4">Nhom 4</option>
            <option value="5">Nhom 5</option>
            <option value="6">Nhom 6</option>
            <option value="7">Nhom 7</option>
            <option value="8">Nhom 8</option>
            <option value="9">Nhom 9</option>
            
        </select><br>
        
        <?php //Luu thong tin muon them?>
        <button type="submit">Save</button>
    </form>
    <a class="editql"href="index.php" > Quay lai</a>
</body>
</html>