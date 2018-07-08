<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="loops_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 08/07/18
 * Time: 10:48 PM
 */
for($i=1;$i<=12;$i++) {
    echo "<tr>";
    for($j=1;$j<=12;$j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>