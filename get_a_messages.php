<?php

// Create a connection to the database
$host = "localhost";
$username = "root";
$password = "Nithin@2004";
$dbname = "answer_db";
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve the data from the question table
$sql = "SELECT qid, message FROM a_messages";
$result = $mysqli->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Loop through each row and display the qid and message in the format qid:message
    while($row = $result->fetch_assoc()) {
        echo $row["qid"] . ":" . $row["message"] . "<br>";
    }
} else {
    echo "No results found";
}

// Close the database connection
$mysqli->close();

?>
