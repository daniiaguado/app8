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
        $hermano1 = $_POST["hermano1"]; 
        $hermano2 = $_POST["hermano2"];
            function myFuction($hermano1 , $hermano2) {
                 if ($hermano1 > $hermano2){
                    $resta =  $hermano1 - $hermano2;
                return $resta;
            }else {
                $resta = $hermano2 - $hermano1;
                return $resta;
        }
    }
    
}

?>
    <label for="hermano1"> Introduce la edad de los hermanos 
        <input type="number" id="hermano1" name = "hermano1">
    </label>
    <label for="hermano2">
        <input type="number" id = "hermano2" name = "hermano2">
    </label>
    <input type="submit" value="calcular">
</body>
</html>
<?php


