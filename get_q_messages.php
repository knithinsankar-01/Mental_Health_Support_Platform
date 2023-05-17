<?php
// Create a connection to the database
$host = "localhost";
$username = "root";
$password = "Nithin@2004";
$dbname = "question_db";
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the data from the question table
$sql = "SELECT qid,question FROM questions";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the qid and message in the format qid:message
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["qid"] . ":" . $row["question"] . "<br>";
    }
} else {
    echo "No results found";
}

// Close the database connection
mysqli_close($conn);
?>
