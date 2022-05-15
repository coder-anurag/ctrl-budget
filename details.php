<?php
    include "./common.php";
    if (isset($_POST['submit']))
    {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $from = mysqli_real_escape_string($conn, $_POST["from"]);
        $to = mysqli_real_escape_string($conn, $_POST["to"]);
        $budget = mysqli_real_escape_string($conn, $_POST["budget"]);
        $people = mysqli_real_escape_string($conn, $_POST["people"]);    
        $insert = "INSERT INTO users ('title,from, to, budget, people') VALUES ('$title', '$from', '$to', '$budget', '$people')";
        if(!insert)
        {
            echo mysqli_error();
        }
        else
        {
            echo "records added successfully";    
        }
    }
    ?>
     

