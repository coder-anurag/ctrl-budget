<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctrlbudget";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$title = $_POST['name'];
$date = $_POST['date'];
$spent = $_POST['spent'];
$bill = $_POST['file'];
$sql = "INSERT INTO plan(name, date, spent, file) values('$title','$date','$spent','$bill')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

{
    header("location:home2.php");
}
 ?>