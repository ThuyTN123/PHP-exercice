<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>
    <h1> Exercices of PHP Basic _ ThuyTN </h1> <br><br>
    <h2> Input numero X and Y </h2>
    <form method="post" action="test.php">  
        Numero_1: <input type="number" name="num1">
        <br><br>

        Numero_2: <input type="number" name="num2">
        <br><br>

        <h3> Choisez operator: </h3> <br>
        <input type="radio" name="operator" value="add">Addition
        <input type="radio" name="operator" value="soustrac">Soustraction
        <input type="radio" name="operator" value="div">Division
        <input type="radio" name="operator" value="multi">Multiplication
    
        <br><br><br><br>
    
        <input type="submit" name="submit" value="Calculator"> <br> <br><br> <br> 
    </form>

    <?php
        $num1 = 0;
        $num2 = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["num1"])) {
              $num1Err = "Numero_1 is required";
            } else {
              $num1 = test_input($_POST["num1"]);
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["num2"])) {
              $num2Err = "Numero_2 is required";
            } else {
              $num2 = test_input($_POST["num2"]);
            }
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        echo  "<b> numero_1 is {$num1} and numero_2 {$num2} which are in the list below: </b> <br> <br>";



    $n1 = "[X]";
    $n2 = "[Y]";
    echo  "<b> Input numero_1 {$n1} and numero_2 {$n2} which are in the list below: </b> <br> <br>";

    // danh sach so le tu 1 den 30

    $n=30;
    for ($i = 0; $i <= $n; $i++){
        if ($i%2==1){
            echo $i."__ ";
        }
    }

    echo  "<br> <br> Input numero_1 {$n1} is:";
    echo  "<br> <br>Input numero_2 {$n2} is:";

?>
</body>
</html>