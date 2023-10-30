<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter the number of elements: <input type="text" name="num"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $num = $_POST['num'];
    echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
    for ($i = 0; $i < $num; $i++) {
        echo "Enter element " . ($i + 1) . ": <input type='text' name='array[]'><br><br>";
    }
    echo "<input type='submit' name='sort' value='Sort Array'>";
    echo "</form>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sort'])) {
    if (isset($_POST['array'])) {
        $array = $_POST['array'];
        sort($array);
        echo "The sorted values of the array are: ";
        foreach ($array as $value) {
            echo $value . " ";
        }
    } else {
        echo "No values entered in the array.";
    }
}
?>

</body>
</html>
