<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set.<br>";
    echo "Cookie value is: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set.";
}
?>

</body>
</html>
