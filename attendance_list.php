<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
</head>

<body>
    <nav>
        <button type="button"><a href="#">Back</a></button>
        <button type="button"><a href="#">Logout</a></button>
        <form action="logout.php" method="post">
            <button type="submit" name="Logout">Logout</button>
        </form>
    </nav>
    <center>
        <h1>Attendance System</h1>

        <p>List of Students</p>

        <table border="4px solid" style="border-color: pink;">
            <thead>
                <tr>
                    <th>&nbsp;EMAIL&nbsp;</th>
                    <th>&nbsp;STUDENT ID&nbsp;</th>
                    <TH>&nbsp;FIRST NAME&nbsp;</TH>
                    <TH>&nbsp;MIDDLE NAME&nbsp;</TH>
                    <TH>&nbsp;LASTNAME&nbsp;</TH>
                    <TH>&nbsp;COURSE&nbsp;</TH>
                    <TH>&nbsp;TIME&nbsp;</TH>
                </tr>

            </thead>
            <tbody>
                <?php
                include "conn.php";
                $get_data = mysqli_query($conn, "SELECT * FROM attendance");
                while ($row = mysqli_fetch_array($get_data)) {
                ?>
                    <tr>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['student_id'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['middlename'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['course'] ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" <button><img width="32" height="32" src="https://img.icons8.com/ios-glyphs/32/edit-user-female.png" alt="edit-user-female" /></button></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" <button><img width="32" height="32" src="https://img.icons8.com/ios-filled/32/delete-user-male.png" alt="delete-user-male" /></button></td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
    </center>
    </table>






</body>

</html>