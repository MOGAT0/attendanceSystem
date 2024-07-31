<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>ATTENDANCE</h1>
    </nav>
    <div class="filter">
        <label for="">Filter</label><br>
        <select title="Department" name="" id="">
            <option value="all">All</option>
            <?php 
                include 'conn.php';
                $sql = "SELECT DISTINCT course FROM attendance;";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value=""><?php echo $row['course']; ?></option>
                    <?php
                }
            ?>
        </select>
        <select title="Date" name="" id="">
            <option value="all">All</option>
            <?php 
                include 'conn.php';
                $sql = "SELECT DISTINCT date FROM attendance;";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['date']; ?>" ><?php echo $row['date']; ?></option>
                    <?php
                }
            ?>

        </select>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr> 
                    <th>#</th>
                    <th>ID Number</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "conn.php";
                    $sql = "SELECT * FROM `attendance`";
                    $query = mysqli_query($conn, $sql);
                    $counter = 1;
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $counter ?></td>
                            <td><?php echo $row['student_id'] ?></td>
                            <td><?php 
                                echo $row['firstname']; 
                                echo " ";
                                echo $row['middlename'];
                                echo " "; 
                                echo $row['lastname']; 
                            ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                        </tr>
                        <?php
                        $counter ++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>