<?php
$cookieName = "user";
$cookieValue = "John Doe";
setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); // 86400 = 1 day

if (isset($_COOKIE[$cookieName])) {
    echo "Cookie '" . $cookieName . "' is set.<br>";
    echo "Cookie value is: " . $_COOKIE[$cookieName];
} else {
    echo "Cookie named '" . $cookieName . "' is not set!";
}
?>
