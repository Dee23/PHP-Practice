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
$cities=array(
"Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London"
);

//Print values of array to browser, separated by commas.
foreach($cities as $c){
    echo "$c, ";
}

//Sort array.
sort ($cities);

//Print array as bulleted list.
echo "\n<ul>\n" ;
foreach($cities as $c){
    echo "<li>$c</li>\n";
}
echo "</ul>" ;

//Add four cities to array.
array_push ($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;

//Sort again, and print bulleted list.
sort ($cities);
echo "\n<ul>\n";
foreach($cities as $c){
    echo "<li>$c</li>\n";
}
echo "</ul>";
?>
?>
</body>
</html>
