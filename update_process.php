<?php
include "conn.php";

if (isset($_POST['Update_StudentAcc'])) {
    $stud_SchoolID = $_POST['stud_SchoolID'];
    $stud_email = $_POST['stud_email'];
    $stud_last = $_POST['stud_last'];
    $stud_first = $_POST['stud_first'];
    $stud_middle = $_POST['stud_middle'];
    $stud_course = $_POST['course'];
    $stud_pass = $_POST['stud_pass'];
    $stud_id = $_POST['stud_id'];


    // echo $stud_SchoolID, $stud_id, $stud_email, $stud_last, $stud_first, $stud_middle, $stud_course, $stud_pass, $stud_section, $stud_subject;
    $sql = sprintf("select * from attendance where   id='$stud_id'");
    $request = mysqli_query($conn, $sql);
    $userinfo = mysqli_fetch_array($request);

    //update
    $sql = sprintf(
        "
    UPDATE attendance SET email='%s',`password`='%s',student_id='%s',firstname='%s',middlename='%s',lastname='%s',`Program`='%s'
    WHERE email='%s' AND student_id='%s' AND firstname='%s' AND middlename='%s' AND lastname='%s' AND `Program`='%s'",
        $stud_email,
        $stud_pass,
        $stud_SchoolID,
        $stud_first,
        $stud_middle,
        $stud_last,
        $stud_course,
        $userinfo['email'],
        $userinfo['student_id'],
        $userinfo['firstname'],
        $userinfo['middlename'],
        $userinfo['lastname'],
        $userinfo['Program']
    );
    $update = mysqli_query($conn, $sql);

    if ($update == true) {
?>
        <script>
            alert("The Data is successfully Updated");
            window.location.href = "dashboard.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("The Data Updated Failed");
            window.location.href = "create.php";
        </script>

<?php
    }
}
