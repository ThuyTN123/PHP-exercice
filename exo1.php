<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <style>
        /* Style to remove default list styles */
        ul {
            list-style-type: none;
            padding: 0;
        }

        /* Style for list items (optional) */
        ul li {
            margin-bottom: 10px; /* Optional: Add some spacing between list items */
        }
    </style>

</head>
<body>
    <h1> Exercices of PHP Basic _ ThuyTN </h1> <br><br>
    <h2> Calculate with X and Y </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- <form method="post" action="process.php">   -->
        Numero_X: <input type="number" name="number1" required>
        <br><br>

        Numero_Y: <input type="number" name="number2"required>
        <br><br>

        <h3> Choisissez operator: </h3> <br>
        <ul>
            <li><input type="radio" name="operator" value="add">Addition </li>
            <li><input type="radio" name="operator" value="soustrac">Soustraction</li>
            <li><input type="radio" name="operator" value="div">Division </li>
            <li><input type="radio" name="operator" value="multi">Multiplication </li>
        </ul>
        <br><br><br><br>
    
        <input type="submit" name="submit" value="Calculator"> <br> <br><br> <br> 
    </form>

    <?php
        // Define variables
$num1 = $num2 = $result = $oper= "";
$calc = array("add", "soustrac", "multi","div");

// Check if $oper is in the list of expected values
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    if (empty($_POST["operator"])) {
        echo "please select your operator";
    } else {
         $num1 = $_POST["number1"];
         $num2 = $_POST["number2"];
         $oper = $_POST["operator"];
    
    }
    // Validate input
    
    
    if (!is_numeric($num1) || !is_numeric($num2) || !in_array($oper, $calc)) {
        echo "Please enter valid values";
    } else {
        // Perform the calculation based on the operator
        if ($oper == "add") {
            $result = $num1 + $num2;
        } elseif ($oper == "soustrac") {
            $result = $num1 - $num2;
        } elseif ($oper == "div") {
            // Check for division by zero
            if ($num2 == 0) {
                echo "<b>Cannot divide by zero</b>";
            } else {
                $result = round (($num1 / $num2),2);
            }
        } elseif ($oper == "multi") {
            $result = $num1 * $num2;
        } else {
            echo "Please enter valid values";
        }
    }
}

// Display result if available
if ($result !== "") {
     echo "<br><b> Result: ". $num1 ." ". $oper ." ". $num2 ." "."="." ". $result;
}      


    

?>
</body>
</html>