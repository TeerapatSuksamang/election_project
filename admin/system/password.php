<?php

    include_once '../../system/db.php';
    session_start();

    if(isset($_POST['submit'])){
        $old_pass = $_POST['old_pass'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $select = mysqli_query($conn, "SELECT * FROM `std_admin` WHERE  `std_admin_id` = '".$_SESSION['std_admin_id']."' ");
        $row = mysqli_fetch_array($select);

        if(password_verify($old_pass, $row['password'])){
            if($pass1 == $pass2){
                $new_pass = password_hash($pass1, PASSWORD_BCRYPT);
                // echo $new_pass;
                $sql = mysqli_query($conn, "UPDATE `std_admin` SET `password` = '$new_pass' WHERE `std_admin_id` = '".$_SESSION['std_admin_id']."' ");
                ($sql ? alert('เปลี่ยนรหัสผ่านสำเร็จ', '../index.php') : alert('เกิดข้อผิดพลาด'));
            } else {
                alert('ยืนยันรหัสผ่านไม่ถูกต้อง');
            }
        } else {
            alert('รหัสผ่านเก่าไม่ถูก');
        }
    }

?>