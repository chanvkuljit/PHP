<?php
$cookie_name = "user";
$cookie_value = "new_user";

if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = "returning_user";
}

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if($cookie_value === "new_user") {
    echo "Welcome, new user!";
} else {
    echo "Welcome back, returning user!";
}
?>
