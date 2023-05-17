<!DOCTYPE html>
<html>
<head>
  <title>Reviews Page</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
}

h1 {
  text-align: center;
  color: #333333;
}

table {
  margin: 20px auto;
  border-collapse: collapse;
  width: 80%;
  max-width: 800px;
  background-color: #ffffff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #e0e0e0;
}

th {
  background-color: #fafafa;
  font-weight: 600;
}

tr:nth-child(even) {
  background-color: #f5f5f5;
}

  </style>
</head>
<body>
  <h1>Feedback Reviews</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
      <?php include("reviews.php"); ?>
    </tbody>
  </table>
</body>
</html>
