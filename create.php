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
        <h1>Create Student</h1>
        <form action="create_process.php" method="post">
            <label>Student ID</label> <br>
            <input type="text" name="stud_id" required> </p>

            <label>School Email</label> <br>
            <input type="text" name="stud_email" required> </p>

            <label>Last Name</label> <br>
            <input type="text" name="stud_last" required> </p>

            <label>First Name</label> <br>
            <input type="text" name="stud_first" required> </p>

            <label>Middle Name</label> <br>
            <input type="text" name="stud_middle" required> </p>

            <label for="course">Course:</label> <br>
            <select name="course" id="course">
                <option value="bs-hospitality-management">BS in Hospitality Management</option>
                <option value="bs-tourism-management">BS in Tourism Management</option>
                <option value="bs-business-administration-marketing">BS in Business Administration Major in Marketing Management</option>
                <option value="bs-business-administration-financial">BS in Business Administration Major in Financial Management</option>
                <option value="bs-accountancy">BS in Accountancy</option>
                <option value="bs-accounting-information-system">BS in Accounting Information System</option>
                <option value="bachelor-elementary-education-general">Bachelor of Elementary Education Major in General</option>
                <option value="bachelor-secondary-education-english">Bachelor of Secondary Education Major in English</option>
                <option value="bachelor-secondary-education-filipino">Bachelor of Secondary Education Major in Filipino</option>
                <option value="bs-special-needs-education">BS in Special Needs Education</option>
                <option value="bs-criminology">BS in Criminology</option>
                <option value="bs-civil-engineering">BS in Civil Engineering</option>
                <option value="bs-mechanical-engineering">BS in Mechanical Engineering</option>
                <option value="bs-nursing">BS in Nursing</option>
                <option value="bs-pharmacy">BS in Pharmacy</option>
                <option value="bs-psychology">BS in Psychology</option>
                <option value="bs-information-technology">BS in Information Technology</option>
                <option value="bs-marine-engineering">BS in Marine Engineering</option>
            </select> </p>

            <label>Password</label> <br>
            <input type="text" name="stud_pass" required> </p>
            <input type="hidden" name="section" value="<?php echo $userinfo['section'] ?>">
            <input type="hidden" name="subject" value="<?php echo $userinfo['subject'] ?>">
            <button type="submit" name="create_acc">Create</button>
        </form>
    </center>
</body>

</html>