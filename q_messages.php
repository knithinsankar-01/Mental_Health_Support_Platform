<?php
// Get the submitted question message
$q_message = $_POST['q_message'];

// Connect to the database
$host = "localhost";
$dbname = "question_db";
$username = "root";
$password = "Nithin@2004";

$mysqli = new mysqli($host,$username,$password,$dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}


// Insert the question message into the database
$sql = "INSERT INTO questions (question) VALUES ('$q_message')";
if ($mysqli->query($sql) === TRUE) {
  echo "Question stored successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>
