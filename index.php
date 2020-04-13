<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter info
    <label for="side1">
        Side 1:
        <input type="number" name="side1" id="side1">
    </label>
    <label for="side2">
        Side 2:
        <input type="number" name="side2" id="side2">
    </label>
    <label for="side3">
        Side 3:
        <input type="number" name="side3" id="side3">
    </label>
    <input type="submit" value="ENTER">
</form>
<?php
function isTriangle($side1, $side2, $side3)
{
    include_once "Triangle.php";
    include_once "Shape.php";
    if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
        return true;
    } else
        return false;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $side1 = (double)$_REQUEST['side1'];
    $side2 = (double)$_REQUEST['side2'];
    $side3 = (double)$_REQUEST['side3'];

    if (isTriangle($side1,$side2,$side3)){
            $newTriangle = new Triangle('triangle1',$side1,$side2,$side3,'white');
            echo '<br>Triangle Perimeter: '.  $newTriangle->getPerimeter();
            echo '<br>Triangle Area: '.  $newTriangle->getArea();
            echo '<br>Triangle Color: '.  $newTriangle->getColor();
    }



}
?>
</body>
</html>