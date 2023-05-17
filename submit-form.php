<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$remarks = $_POST['remarks'];

// Connect to the database
$host = "localhost";
$dbname = "review_db";
$username = "root";
$password = "Nithin@2004";

$mysqli = new mysqli($host,$username,$password,$dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}



// Insert the data into the database
$sql = "INSERT INTO review (Name,Email,Country,Remarks) VALUES ('$name', '$email', '$country', '$remarks')";

if ($mysqli->query($sql) === TRUE) {
  echo "Form data submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();
?>
