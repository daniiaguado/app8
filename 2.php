<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["n1"];
        $numero2 = $_POST["n2"];
        
        $resultado = suma($numero1 , $numero2);

       echo"el resultado es $resultado <br>";

    }
            function suma(int $numero1 , int $numero2) : int {
                return $numero1 + $numero2;
            }

?>
    <form method= "POST" action="">
<label for="n">numero1</label>
    <input type="number" id= "numero1" name = "numero1">
<label for="n">numero2</label>
<input type="number" id="numero2" name="numero2">
<input type="submit" value="calcular">
 </form>
</html>