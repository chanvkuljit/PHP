<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_POST['submit'])) {
    $cookieName = "user";
    $cookieValue = $_POST['username'];
    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); // 86400 = 1 day

    if (isset($_COOKIE[$cookieName])) {
        echo "Cookie '" . $cookieName . "' is set.<br>";
        echo "Cookie Value is: " . $_COOKIE[$cookieName];
    } else {
        echo "Cookie named '" . $cookieName . "' is not set!";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Username:<br>
  <input type="text" name="username"><br><br>
  <input type="submit" name="submit" value="Set Cookie">
</form>

</body>
</html>
