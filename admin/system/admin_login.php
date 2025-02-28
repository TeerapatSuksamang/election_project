<?php

    include_once '../../system/db.php';
    session_start();
    if(isset($_POST['submit'])){ 
        $password = $_POST['password'];

        // echo $std_code.'</br>'.$id_card;

        $select = mysqli_query($conn, "SELECT * FROM `std_admin` WHERE `std_admin_id` = '1' ");
        $row = mysqli_fetch_array($select);
        
        if(password_verify($password, $row['password'])){
                // echo $row['std_name'];
                $_SESSION['std_admin_id'] = $row['std_admin_id'];
                echo $_SESSION['std_admin_id'];
                header('location: ../index.php');

        } else {
            alert('รหัสผ่านไม่ถูก');
        }
    } 

?>