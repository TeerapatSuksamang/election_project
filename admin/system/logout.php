<?php

    session_start();
    unset($_SESSION['std_admin_id']);
    header('location: ../login.php');

?>