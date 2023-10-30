<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_password = "password123";

if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
    setcookie("username", $cookie_value, time() + (86400 * 30), "/");
    setcookie("password", $cookie_password, time() + (86400 * 30), "/");
    echo "Cookies are set to remember the username and password.";
}

if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];
} else {
    $username = "";
    $password = "";
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Username:<br>
  <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
  Password:<br>
  <input type="password" name="password" value="<?php echo $password; ?>"><br><br>
  <input type="checkbox" name="remember"> Remember me<br><br>
  <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
