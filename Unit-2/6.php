<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    function calculator($num1, $num2, $operation) {
        switch ($operation) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Error! Division by zero.";
                }
            default:
                return "Invalid operation";
        }
    }

    $result = calculator($num1, $num2, $operation);
    echo "Result: " . $result;
}
?>

</body>
</html>
