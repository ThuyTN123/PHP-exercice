<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>

<?php

function calculate($num1, $num2, $operator) {
    $calc = array("+", "-", "*","/");
    if (!is_numeric($num1) || !is_numeric($num2) || !in_array($operator, $calc)) {
        echo "<i>Please enter valid values</i>";
    } else {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            // Check if $num2 is not zero to avoid division by zero
            return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "<br>Please input valid value";
        }
    }
}

// Define variables
$num1 = $num2 = $result = $oper= "";
$calc = array("+", "-", "*","/");

// Check if $oper is in the list of expected values
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $oper = $_POST["oper"];

    // Validate input (you may want to add more validation)
    
    // if (!is_numeric($num1) || !is_numeric($num2) || !in_array($oper, $calc)) {
    //     echo "Please enter valid values";
    // } else {
    //     // Perform the calculation based on the operator
    //     if ($oper == "+") {
    //         $result = $num1 + $num2;
    //     } elseif ($oper == "-") {
    //         $result = $num1 - $num2;
    //     } elseif ($oper == "/") {
    //         // Check for division by zero
    //         if ($num2 == 0) {
    //             echo "Cannot divide by zero";
    //         } else {
    //             $result = $num1 / $num2;
    //         }
    //     } elseif ($oper == "*") {
    //         $result = $num1 * $num2;
    //     } else {
    //         echo "Please enter valid values";
    //     }
    // }
}

// Display result if available
// if ($result !== "") {
//     echo "<br> Result:". $num1 . $oper . $num2 ."=". $result;

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="num1">Enter Number 1:</label>
    <input type="text" name="num1" id="num1" value="<?php echo $num1; ?>" required>
    
    <br><br>
    <label for="num2">Enter Number 2:</label>
    <input type="text" name="num2" id="num2" value="<?php echo $num2; ?>" required>
    <br><br>
    <label for="oper">Enter Operator:</label>
    <!-- <input type="text" name="oper" id="oper" value="<?php echo $oper; ?>" required> -->
    <input type="text" name="oper" placeholder="Enter operator (+,-,/,*)" value="<?php echo $oper; ?>" required>
    <br><br>
    <input type="submit" value="Calculate">

</form>

<?php
// Display result if available

// if ($result !== "") {
//     echo "<p><strong> Result: $num1 $oper $num2 = $result</strong></p>";
// }

echo "<br> <br>Calculate by function: <br> $num1 $oper $num2 = ". calculate($num1, $num2, $oper) . "\n";
?>

</body>
</html>
