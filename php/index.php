<?php
// CSDL
include "databasename.php"; //ket noi CSDL

//danh sach sinh vien
$sql = "SELECT * FROM table_student";
$result = $conn->query($sql);

//////////////////////////////////////////////////////////////////////////////
//*Ghi chu:
//Dong 25->29: Dung de tim kiem thong tin user theo ten va que quan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly sinh  vien</title>
    <link rel="stylesheet" href="../css/style0.css">
</head>
<body>
    <h2>DANH SACH SINH VIEN</h2>

    <form action="index.php" method="GET">
        <label for="search">Tim kiem sinh vien:</label>
        <input type="text" name="search" id="search" placeholder="Tim theo ten hoac que">
        <button type="submit">Search</button>
    </form>

    <table>
        <tr>
            <th>TT</th>
            <th>Full Name</th>
            <th>Dob</th>
            <th>Gender</th>
            <th>Home Town</th>
            <th>Level</th>
            <th>Group</th>
            <th>Function</th>
        </tr>
        <tbody>
            
        <?php 

        //Tim kiem thong tin sinh vien theo ten hoac que
        $search = $_GET['search'] ?? "";
        $query = "SELECT * FROM table_student WHERE full_name LIKE '%$search%' OR hometown LIKE '%$search%'";
        $result = $conn->query($query);



        //LAp qua cac hang du lieu duoc tra ve
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td class="btn function"><?php echo $row["id"]; ?></td>
                <td><?php echo $row["full_name"]; ?></td>
                <td class="btn function"><?php echo $row["dob"]; ?></td>
                <td class="btn function"><?php echo $row["gender"] == 1 ? "Nam" :  "Nu"; ?></td>
                <td class="btn function"><?php echo $row["hometown"]; ?></td>
                <td class="btn function">
                    <?php $levels=["Tien si", "Thac si", "Ky su",  "Khac"];
                     echo $levels[$row["level_id"]]; ?>
                </td>
                <td class="btn function"><?php echo $row["group_id"];?></td>

                <td class="btn function">

                <?php // Chuyen sang trang chinh sua thong tin user?>
                    <a class="btn edit" href="edit.php?id=<?php echo $row["id"]; ?>" >Edit</a>  

                    <?php //Dung de xoa thong tin sinh vien?>
                    <a class="btn delete" href="delete.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Realy delete?')//Hoi lai, lua chon xem chac chan muon xoa hay khong?;">Delete</a> 
                </td>
            </tr>
        <?php } ?>

        
        </tbody>
    </table>
    <td>

        <?php //Chuyen sang trang them thong tin user moi?>
        <a class="editadd" href="add.php"> Add Student </a>
    </td>      
    
</body>
</html>