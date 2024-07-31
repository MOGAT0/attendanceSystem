<?php
include "conn.php";

if (isset($_GET['delete_student'])) {
    $delete_id = $_GET['delete_student'];
    $sql = sprintf("DELETE FROM attendance WHERE id='$delete_id' ");
    $delete = mysqli_query($conn, $sql);
    if ($delete == true) {
?>
        <script>
            alert("The Data is successfully Deleted");
            window.location.href = "dashboard.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("The Data Deleted Failed");
            window.location.href = "dashboard.php";
        </script>

    <?php
    }
}

if (isset($_GET['delete_attendance'])) {
    $delete_id = $_GET['delete_attendance'];
    $sql = sprintf("DELETE FROM attendance WHERE id='$delete_id' ");
    $delete = mysqli_query($conn, $sql);
    if ($delete == true) {
    ?>
        <script>
            alert("The Data is successfully Deleted");
            window.location.href = "attendance.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("The Data Deleted Failed");
            window.location.href = "attendance.php";
        </script>

<?php
    }
}
