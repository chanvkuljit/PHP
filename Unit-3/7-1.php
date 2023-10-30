<?php
session_start();

// Redirect to index.php if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="submit" name="logout" value="Logout">
</form>

</body>
</html>
