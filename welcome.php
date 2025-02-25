<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your magical email address is: <?php echo $_POST["email"]; ?>

    <div class="dib">
        <h2>Welcome to Coiling Blues</h2>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <div class="welcome-actions">
            <a href="logout.php" class="button">Logout</a>
        </div>
    </div>
</body>
</html>