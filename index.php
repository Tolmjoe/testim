<?php
require_once 'connectiondb.php';
$username = $password = $nameErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $nameErr = "Username is required";
    } else {
        $username = $_POST["username"];
    }
    
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    } else {
        $password = $_POST["pass"];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup here</title>
</head>
<body>
    <div class="dibX">
        <h3>Signup to Coiling Blues</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
           <div class="dibch"><label for="username">Username</label>
           
            <input name="username" type="email" placeholder="Enter your email" required></div> 
           <div class="dibch"> <label for="pass">Password</label>
            <input name="pass" type="password" placeholder="Choose a strong password" required></div> 
           <div><input  class="button2" type="submit" value="Create Account"></div>  
           <div><a target="_blank" href="login.php">Login here</a></div>

        </form>
    </div>
</body>
</html>