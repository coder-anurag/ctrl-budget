<?php
    include "./common.php";
    
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $from = mysqli_real_escape_string($conn, $_POST['from']);
    $to = mysqli_real_escape_string($conn, $_POST['to']);
    $budget = mysqli_real_escape_string($conn, $_POST['budget']);
    $people = mysqli_real_escape_string($conn, $_POST['people']);
    
    $query2= "INSERT INTO 'details' (title,from,to,budget,people) VALUES ('$title', '$from', '$to', '$budget', '$people')";
        {
        // perform query operation
        $result = mysqli_query($conn, $query2);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);

        // redirect to products page
        header("location: home2.php");
    }
?>