<?php
session_start();
include "conn.php";

if (empty($_SESSION)) {
    echo "<h1  style='color: red; text-decoration: solid;'>404</h1>";
    exit();
} else {
    $sql = sprintf("select section,subject from attendance where id='%s'", $_SESSION["user_id"]);
    $request = mysqli_query($conn, $sql);
    $userinfo = mysqli_fetch_array($request);
    if (isset($_GET["Date"])) {
        $date_today = $_GET["Date"];
    } else {
        date_default_timezone_set("Asia/Manila");
        $date_today = date('Y-m-d');
    }
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
        <button type="button"><a href="dashboard.php">Back</a></button>
    </nav>
    <center>
        <h1>Add Attendance</h1>
        <form action="attendance_process.php" method="post">
            <label for="course">Name:</label> <br>
            <select name="student_name" id="student_name">
                <?php
                $sql = sprintf("select id,firstname,lastname,middlename from attendance where section='%s' and subject='%s'", $userinfo['section'], $userinfo['subject']);
                $list_student = mysqli_query($conn, $sql);
                while ($list_stud = mysqli_fetch_array($list_student)) {
                ?>
                    <option value="<?php echo $list_stud['id'] ?>">
                        <?php echo $list_stud['firstname'], " ", $list_stud['middlename'], ".", " ", $list_stud['lastname']; ?>
                    </option>
                <?php
                }
                ?>
            </select> </p>
            <input type="hidden" name="date" value="<?php echo $date_today; ?>">
            <button type="submit" name='add_attendance'>&nbsp; + Add Student</a>&nbsp;</button>
        </form>
        <br> <br>

        <h1>List of Students</h1>
        <h2>Present in <?php echo $date_today; ?></h2>
        <h3><?php echo $userinfo['section']; ?></h3>
        <p><?php echo $userinfo['subject']; ?></p>
        <form method="post" action="attendance_process.php">
            <label>Date</label> <br>
            <input type="date" name="date"> </p>
            <button type="submit" name="change_date">&nbsp;Select&nbsp;</button> <br> <br>
        </form>
        <table border="4px solid" style="border-color: pink;">
            <thead>
                <tr>
                    <th>&nbsp;EMAIL&nbsp;</th>
                    <th>&nbsp;STUDENT ID&nbsp;</th>
                    <TH>&nbsp;FIRST NAME&nbsp;</TH>
                    <TH>&nbsp;MIDDLE NAME&nbsp;</TH>
                    <TH>&nbsp;LASTNAME&nbsp;</TH>
                    <TH>&nbsp;COURSE&nbsp;</TH>
                    <TH>&nbsp;DELETE&nbsp;</TH>

                </tr>

            </thead>
            <tbody>
                <?php
                $sql = sprintf("select * from attendance where date='%s' and teacher='%s' ", $date_today, $_SESSION["user_id"]);
                $get_data = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($get_data)) {
                ?>
                    <tr>
                        <td><?php echo $row['student_id'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['middlename'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['Program'] ?></td>
                        <td><a onclick="myFunction(<?php echo $row['id'] ?>)"><img width="32" height="32" src="https://img.icons8.com/ios-filled/32/delete-user-male.png" alt="delete-user-male" /></td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
        </table>
        <br>
        <br>
    </center>


    <script>
        function myFunction(x) {
            if (confirm("Are you sure you want to delete it")) {
                window.location.href = "delete_process.php?delete_attendance=" + x;
            }
        }
    </script>
</body>

</html>