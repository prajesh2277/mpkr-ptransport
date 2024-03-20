<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="Login page.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
      
        <from id="login-form"action="Home.php" methode="POST">
        <form action="#" method="POST" id="login-form">
            <label for="login-username">Username or Email</label>
            <input type="text" id="login-username" name="login-username" required>

            <label for="login-password">Password</label>
            <input type="password" id="login-password " name="login-password" required>

            <input type="submit" value="Login">
        </form>
        <ul>
            <li><a href="sign up.php">sign up </a></li>
                <li><a href="log out.php">log out</a></li>
            
        </ul>
       
    </div>
</body>
</html>