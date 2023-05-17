<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mental Health Support Platform</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style3.css">
<body>

    <h1>Home</h1>
    <div class="container">
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <button><a href="login.php">Log in</a></button> or <button><a href="signup.html">sign up</a></button>
        
    <?php endif; ?>
    </div>
</body>
    
</html>