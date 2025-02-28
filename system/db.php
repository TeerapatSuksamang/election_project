<?php

    $conn = mysqli_connect("localhost", "ietdevco_krujune", "qwerty", "ietdevco_krujune");
    // echo ($conn ? 1 : 0);
    
    function back(){
        echo "<script>window.history.back();</script>";
    }
    
    function alert($msg, $lo = null){
        if($lo == null){
            echo "<script>alert('$msg'); window.history.back();</script>";
        } else {
            echo "<script>alert('$msg'); window.location = '$lo';</script>";
        }
    }

?>