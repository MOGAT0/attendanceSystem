<?php
include "conn.php";

if (isset($_POST['Login'])) {
    $email = $_POST["username"];
    $password = $_POST["password"];
    if (empty($password) && empty($email)) {
?>
        <script>
            alert("Alert Empty both flied is Empty");
            location.href = "login.php";
        </script>
    <?php
    } elseif (empty($password)) {
    ?>
        <script>
            alert("Alert Empty Password");
            location.href = "login.php";
        </script>
    <?php
    } elseif (empty($email)) {
    ?>
        <script>
            alert("Alert Empty Username");
            location.href = "login.php";
        </script>
<?php
    } else {
        $sql = sprintf("select id,email,password,super_user from attendance where email='$email' and password='$password' ");
        $request = mysqli_query($conn, $sql);
        $result_array = mysqli_fetch_array($request);
        if (
            mysqli_num_rows($request) == 1 && $result_array['super_user'] == 1 &&
            $result_array['email'] == $email && $result_array['password'] == $password
        ) {
            session_start();
            $_SESSION["user_id"] = $result_array['id'];
            header("Location: create.php");
        }
    }
}
