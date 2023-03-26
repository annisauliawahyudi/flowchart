<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>

<H1>INPUT</H1>


<br>
    <form action="" method="post">
        <tr>
            <td><label for="username">BIL 1 </label></td>
            <td><input type="number" name="a" ></td>
        </tr>
        <tr>
            <td><label for="password">BIL 2 </label></td>
            <td><input type="number" name="b" ></td>
        </tr>
        <tr>
            <td><label for="password">BIL 3 </label></td>
            <td><input type="number" name="c" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>





<?php
// Input 3 buah bilangan bulat


// Cari bilangan dengan nilai tengah

if(isset($_POST["submit"])){


    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];


if ($a > $b) {
    if ($b > $c) {
        $mid = $b;
    } elseif ($a > $c) {
        $mid = $c;
    } else {
        $mid = $a;
    }
} else {
    if ($a > $c) {
        $mid = $a;
    } elseif ($b > $c) {
        $mid = $c;
    } else {
        $mid = $b;
    }
}

// Cetak bilangan dengan nilai tengah
echo "Bilangan dengan nilai tengah adalah: " . $mid . "\n";

}
?>
</body>
</html>