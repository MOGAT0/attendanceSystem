<?php
include "conn.php";
if (isset($_POST['create_acc'])) {
    $stud_id = $_POST['stud_id'];
    $stud_email = $_POST['stud_email'];
    $stud_last = $_POST['stud_last'];
    $stud_first = $_POST['stud_first'];
    $stud_middle = $_POST['stud_middle'];
    $stud_course = $_POST['course'];
    $stud_pass = $_POST['stud_pass'];
    $stud_section = $_POST['section'];
    $stud_subject = $_POST['subject'];


    $insert = sprintf("INSERT INTO attendance (student_id, email, lastname, firstname, middlename, program, `password`,`subject`,section) 
        VALUES ('$stud_id','$stud_email', '$stud_last', '$stud_first', '$stud_middle', '$stud_course', '$stud_pass','$stud_subject','$stud_section')");
    $insert_data = mysqli_query($conn, $insert);

    // echo $stud_id, $stud_email, $stud_last, $stud_first, $stud_middle, $stud_course, $stud_pass, $stud_section, $stud_subject;

    if ($insert_data == true) {
?>
        <script>
            alert("The Data is successfully inserted");
            window.location.href = "dashboard.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("The Data Inserted Failed");
            window.location.href = "create.php";
        </script>

<?php
    }
}


?>