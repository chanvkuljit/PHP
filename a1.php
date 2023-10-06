<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['user_id'])){
    header("Location: welcome.php"); // Redirect to welcome page if already logged in
    exit();
}

// Check if the login form is submitted
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // You should perform validation and authentication here (e.g., with a database)
    // For simplicity, we'll just check for a specific username and password.
    if($username === 'your_username' && $password === 'your_password'){
        // Set a session variable to mark the user as logged in
        $_SESSION['user_id'] = $username;
        header("Location: welcome.php"); // Redirect to welcome page after successful login
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

// Check if the user wants to log out
if(isset($_POST['logout'])){
    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php if(isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" name="login" value="Login">
    </form>
    
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
