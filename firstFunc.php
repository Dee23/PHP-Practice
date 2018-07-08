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
<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 08/07/18
 * Time: 11:51 PM
 */
function area($width,$length) {
        $area = $width*$length;
        echo "The area of a rectangle with width " .$width. " and length " .$length. " is " .$area;
}
area(5,6);
?>
</body>
</html>