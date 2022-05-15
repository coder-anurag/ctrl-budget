<?php
    require "./common.php";
    // get details
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    // hash password
    $hashed_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query2 = "INSERT INTO users (name, email, password, phone_number) VALUES ('$name', '$email', '$hashed_password', '$phone_number')";

    // check if already registered user
    $result = mysqli_query($conn,$query1);
    if(mysqli_num_rows($result)>0){
        // email already exists
        echo "Email id already exists. Try another";
    }
    else{
        // perform query operation
        $result = mysqli_query($conn, $query2);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);

    }?>
{
        <?php echo '<script>alert("redirected to home page")</script>';?> 
        <?php echo ("<script>location.href='home.php'</script>");?>
    }