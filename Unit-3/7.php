<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your authentication logic here
    // For example, you can check the credentials against a database

    // If the authentication is successful, create a session
    if ($username == 'user' && $password == 'password') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Username:<br>
  <input type="text" name="username"><br><br>
  Password:<br>
  <input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
