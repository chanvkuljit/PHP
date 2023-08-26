<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculate</title>
</head>
<body>
    <center>
    <h1>Age Calculator</h1>
    
    <?php
    $birthDate = "";
    $age = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthDate = $_POST["birthDate"];
        
        
        $today = date("Y-m-d");
        $diff = date_diff(date_create($birthDate), date_create($today));
        $age = $diff->format(" %y years");
    }
    ?>
    
    <form method="post" action="">
        <label for="birthDate">Enter your birthdate: </label>
        <input type="date" name="birthDate" value="<?php echo $birthDate; ?>" required>
        <button type="submit">Calculate Age</button>
    </form>
    
    <?php
    if ($age !== "") {
        echo "<p>Your age is: $age</p>";
    }
    ?>
    </center>
</body>
</html>
</html>
