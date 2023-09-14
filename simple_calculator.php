
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        if ($operation === 'add') {
            $result = $num1 + $num2;
        } 
        elseif ($operation === 'subtract') {
            $result = $num1 - $num2;
        } 
        elseif ($operation === 'multiply') {
            $result = $num1 * $num2;
        } 
        elseif ($operation === 'divide') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: Division by zero is not allowed.";
            }
        } else {
            echo "Invalid operation selected.";
        }

        echo "<h2>Result:</h2>";
        echo "{$result}</p>";
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
