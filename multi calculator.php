<!DOCTYPE html>
<html>
<head>
    <title>Multipurpose Calculator</title>
</head>
<body>
    <h2>Multipurpose Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="percentage">Percentage</option>
            <option value="square_root">Square Root</option>
            <option value="logarithm">Logarithm</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = '';

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 == 0) {
                    $result = "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            case "percentage":
                $result = ($num1 / 100) * $num2;
                break;
            case "square_root":
                $result = sqrt($num1);
                break;
            case "logarithm":
                $result = log($num1, $num2);
                break;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
