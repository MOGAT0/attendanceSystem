<?php
if (isset($_POST['logout_user'])) {
    session_start();
    session_destroy();

?>
    <script>
        alert("Logout successfully");
        location.href = "login.php";
    </script>
<?php

}
