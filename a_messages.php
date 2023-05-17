<?php
// Retrieve the form data
$qid = $_POST['a_qid'];
$message = $_POST['a_message'];

// Validate the data (e.g. check if the fields are not empty)
$host = "localhost";
$dbname = "answer_db";
$username = "root";
$password = "Nithin@2004";

$mysqli = new mysqli($host,$username,$password,$dbname);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Insert the data into the "a_messages" table
$sql = "INSERT INTO a_messages(qid, message) VALUES ('$qid', '$message')";

if ($mysqli->query($sql) === TRUE) {
  echo "Solution stored successfully";
} else {
  echo "Error storing answer: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();

?>
