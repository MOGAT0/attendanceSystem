<?php
include "conn.php";
session_start();

if (empty($_SESSION)) {
    echo "<h1  style='color: red; text-decoration: solid;'>404</h1>";
    exit();
} else {
    $sql = sprintf("select firstname,lastname,section,subject,middlename from attendance where id='%s'", $_SESSION["user_id"]);
    $request = mysqli_query($conn, $sql);
    $userinfo = mysqli_fetch_array($request);
    date_default_timezone_set("Asia/Manila");
    $date_today = date('Y-m-d');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
</head>

<body>
    <nav>
        <button type="button"><a href="attendance.php?Date=<?php echo $date_today ?>">Attendance</a></button>
        <button type="button"><a href="">Logout</a></button>
        <form action="logout.php" method="post">
            <button type="submit" name="Logout">Logout</button>
        </form>
    </nav>
    <center>
        <h1>Attendance System</h1>
        <h2><?php echo $userinfo['firstname'], " ", $userinfo['middlename'], ".", " ", $userinfo['lastname']; ?> </h2>
        <h3>List of Students</h3>
        <h4><?php echo $userinfo['section']; ?></h4>
        <p><?php echo $userinfo['subject']; ?></p>
        <button class="add_new">&nbsp;<a href="create.php"> + Create New Student</a>&nbsp;</button> <br> <br>

        <table border="4px solid" style="border-color: pink;">
            <thead>
                <tr>
                    <th>&nbsp;EMAIL&nbsp;</th>
                    <th>&nbsp;STUDENT ID&nbsp;</th>
                    <TH>&nbsp;FIRST NAME&nbsp;</TH>
                    <TH>&nbsp;MIDDLE NAME&nbsp;</TH>
                    <TH>&nbsp;LASTNAME&nbsp;</TH>
                    <TH>&nbsp;COURSE&nbsp;</TH>
                    <TH>&nbsp;Action1&nbsp;</TH>
                    <TH>&nbsp;Action2&nbsp;</TH>

                </tr>

            </thead>
            <tbody>
                <?php
                $sql = sprintf("select * from attendance where section='%s' and subject='%s'", $userinfo['section'], $userinfo['subject']);
                $get_data = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($get_data)) {
                ?>
                    <tr>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['student_id'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['middlename'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['Program'] ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" <button><img width="32" height="32" src="https://img.icons8.com/ios-glyphs/32/edit-user-female.png" alt="edit-user-female" /></button></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" <button><img width="32" height="32" src="https://img.icons8.com/ios-filled/32/delete-user-male.png" alt="delete-user-male" /></button></td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
        </table>
    </center>






</body>

</html>