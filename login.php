<?php
$username = $password = $nameErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $nameErr = "Your username is required";
    } else {
      $username = $_POST["username"];
    }
  
    if (empty($_POST["pass"])) {
      $passErr = "Your password is required";
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
    <title>Testing Live Server</title>
</head>
<body>
    <div class="dib">
        <h3>Login to Coiling Blues</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <span class="error">* <?php echo $nameErr;?></span>
           <div class="dibch"><label for="username">Username</label>
           
            <input name="username" type="email" value="<?php echo $username;?>"></div> 
            <span class="error">* <?php echo $passErr;?></span>
           <div class="dibch"> <label for="pass">Password</label>
            <input name="pass" type="password" value="<?php echo $password;?>"></div> 
           <div><input  class="button" type="submit"></div>  
        </form>
    </div>
</body>
</html>