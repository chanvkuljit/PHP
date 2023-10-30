<?php
$cookieName = "user";
// Set the cookie to be empty and with an expiration time in the past to delete it
setcookie($cookieName, "", time() - 3600, "/");

echo "Cookie named '" . $cookieName . "' is deleted.";
?>
