<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Array Generator and Average Array</title>
</head>
<body>
    <h1> Exercices of PHP Basic _ ThuyTN </h1> <br><br>
    <h2> Calculate on array A( )</h2><br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="n">Enter the number of elements of array (n):</label>
        <input type="text" id="n" name="n" required>
        <input type="submit" value="Generate Array">
    </form>
    <?php
    
    $arrayA = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate input
        $n = $_POST["n"];
        $n = (int)$n; // Convert to integer
        

        // Check if n is a positive integer
        if ($n <= 0 || !is_int($n)) {
            echo "Please enter a valid positive integer for 'n'.";
        } else {
            // Generate random array
            $arrayA = generateRandomArray($n);

            // Calculate sum array
            $sum = calculateSum($arrayA);

            // Calculate average
            $average = calculateAverage($arrayA);

            // Display the generated array and average
            echo "<br><br><b>Generated Array A: </b><br>";
            print_r($arrayA);
            echo "<br><br><br> <b>Sum of all elements of array A: " . $sum;
            echo "<br><br><br> <b>Average of array A: " . $average;
        }
    } 

    function generateRandomArray($n) {
        $randomArray = array();
        for ($i = 0; $i < $n; $i++) {
            $randomArray[] = rand(1, 100); // Adjust the range as needed
        }
        return $randomArray;
    }

    function calculateSum($array) {
        $sum = 0;
        foreach ($array as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function calculateAverage($array) {
        $sum = 0;
        $count = count($array);

        foreach ($array as $value) {
            $sum += $value;
        }
        // Avoid division by zero
        return $count > 0 ? $sum / $count : 0;
    }

    echo "<h2><br> Calculate on array B( )<br></h2>";
    echo "<br><h3>Display array B( ) with several way</h3><br>";
    $arrayB=array(1,2,3,4,5,6,6,9,9,1,2,3,9,9);
    $colors = array('red', 'green', 'blue');
    echo "<i>";
    // Using print_r() to display the array
    echo "<pre>";
    print_r($colors);
    echo "</pre>";

    // Using var_dump() to display the array
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Sample array
    $fruits = array('apple', 'banana', 'orange');

    // Using a foreach loop to display the array
    echo "<ul>";
    foreach ($fruits as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
    
    // Displaying the arrayB in the desired format
    echo "<b> arrayB is:<h2> B[";
    foreach ($arrayB as $index => $value) {
        echo $value;
        // Add a comma after each element except the last one
        if ($index < count($arrayB) - 1) {
            echo ",";
        }
    }

    echo "] </h2></b>";
    echo "</i>";
    

    $i = 0;
    $s = 0;
    $avr = 0;
    foreach ($arrayB as $value) {
        $i+=1;
        $s+=$value;
        $avr=$s/$i;   
    }
    
    echo "<br><b> Sumary of arrayB is:" .$s;
    echo "<br><br><b> Average of arrayB is:" .$avr;

    $maxValue = $arrayB[0];
    $maxIndices = array(0); // Initialize with the index of the first element

    // Iterate through the array to find the maximum value and its indices
    for ($i = 1; $i < count($arrayB); $i++) {
        if ($arrayB[$i] > $maxValue) {
            $maxValue = $arrayB[$i];
            $maxIndices = array($i); // Start a new array with the current index
        } elseif ($arrayB[$i] == $maxValue) {
            $maxIndices[] = $i; // Add the current index to the array
        }
    }

    // Display the result
    echo "<br><br> The maximum element(s) in the array B is/are at index/indices: " . implode(", ", $maxIndices);
    echo "<br><b> The maximum value of array B is:" .$maxValue;

    echo "<h2><br> Calculate on array C( )<br></h2>";
    echo "<br><h3>The array C is merged from array A and array B is:</h3><br>";

    // Merge the arrays. Merge array A with array B to be array C
    $arrayC = array_merge($arrayA, $arrayB);

    // Display the merged array C
    print_r($arrayC);

    // Find the maximum element of array C
    $maxValueC = max($arrayC);
    echo "<br><br><b> The maximum element in the array C is: $maxValueC <b><br><br><br>";

    // Find the key of the maximum element, only show one index muximum
    $maxKeyC = array_keys($arrayC, max($arrayC))[0];
    echo "<br><b>The maximum element in the array C is at index (showing only one index which is maximum):  $maxKeyC </b><br><b>";

    // Find the key of the maximum element,show all index muximum
    $maxIndicesC = array_keys($arrayC, $maxValueC);
    echo "<br><br><b>The maximum element in the array C is at index/indices (showing all index which are maximum):: " . implode(", ", $maxIndicesC) ."<br><br>";


    


    ?>



</body>
</html>

