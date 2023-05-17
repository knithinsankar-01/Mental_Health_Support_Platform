<?php
// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "Nithin@2004";
$dbname = "review_db";
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve reviews from the database
$sql = "SELECT * FROM review";
$result = $conn->query($sql);

// Display reviews in a table
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Name</th><th>Email</th><th>Country</th><th>Remarks</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Country"]."</td><td>".$row["Remarks"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "No reviews found.";
}

// Close the MySQL connection
$conn->close();
?>
