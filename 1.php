<!doctype html>
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
    <h2>Giai phuong trinh bac 2</h2>
    Nhap a: <input type="text" name="a">
    Nhap b: <input type="text" name="b">
    Nhap c: <input type="text" name="c">
    <input type="submit" value="thuc hien">
</form>
<?php
include "dhaa.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $quadratic = new QuadraticEquation($a, $b, $c);
    if ($a == 0) {
        if($b == 0) {
            echo "Phuong trinh ko co nghiem";
        } else {
            echo "Phuong trinh co 1 nghiem: ".$quadratic->getRoot3();
        }
    } else {
        if($quadratic->getDiscriminant() > 0) {
            echo "Phuong trinh co 2 nghiem: ".$quadratic->getRoot1()." and ".$quadratic->getRoot2();
        }
        if($quadratic->getDiscriminant() == 0) {
            echo "Phuong trinh co 2 nghiem: ".$quadratic->getRoot3();
        }
        if($quadratic->getDiscriminant() < 0) {
            echo "Phuong trinh vo nghiem";
        }
    }
}
?>
</body>
</html>
