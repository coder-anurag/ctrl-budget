<?php
    $conn = mysqli_connect("localhost", "root", "", "ctrlbudget") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>