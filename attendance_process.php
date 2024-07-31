<?php
include "conn.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['change_date'])) {
        $date = $_POST['date'];
        header("Location: attendance.php?Date=$date");
    }

    if (isset($_POST['add_attendance'])) {
        $stud_id = $_POST['student_name'];
        $date = $_POST['date'];
        $sql = sprintf("select student_id,firstname,lastname,middlename,email from attendance where id='$stud_id'");
        $result = mysqli_query($conn, $sql);
        $student_add = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) == 1) {
            $sql = sprintf(
                "select * from attendance where `date`='%s' and teacher='%s' and student_id='%s'",
                $date,
                $_SESSION["user_id"],
                $student_add['student_id']
            );
            echo $sql;
            $check_record = mysqli_query($conn, $sql);
            if (mysqli_num_rows($check_record) <= 0) {
                $insert = sprintf(
                    "INSERT INTO attendance (student_id, email, lastname, firstname, middlename, program,`date`,teacher) 
                 VALUES ('%s','%s','%s','%s','%s','%s','%s','%s')",
                    $student_add['student_id'],
                    $student_add['email'],
                    $student_add['lastname'],
                    $student_add['firstname'],
                    $student_add['middlename'],
                    $student_add['program'],
                    $date,
                    $_SESSION["user_id"]
                );
                $insert_data = mysqli_query($conn, $insert);

                if ($insert_data == true) {
?>
                    <script>
                        alert("<?php echo  $student_add['firstname'], " ", $student_add['middlename'], ".", " ", $student_add['lastname']; ?> is now present in <?php echo $date ?>");
                        window.location.href = "attendance.php?Date=<?php echo $date; ?>";
                    </script>

                <?php
                } else {
                ?>
                    <script>
                        alert("The Data Inserted Failed");
                        window.location.href = "attendance.php";
                    </script>

                <?php
                }
            } else {
                ?>
                <script>
                    alert("<?php echo  $student_add['firstname'], " ", $student_add['middlename'], ".", " ", $student_add['lastname']; ?> is already present in <?php echo $date ?>");
                    window.location.href = "attendance.php";
                </script>

<?php
            }
        }
    }
}
