<?php
if (isset($_POST['Logout'])) {
    session_start();
    session_destroy();

?>
    <script>
        alert("Logout successfully");
        window.location.href = "login.php";
    </script>
<?php

}
