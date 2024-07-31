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
    
}
