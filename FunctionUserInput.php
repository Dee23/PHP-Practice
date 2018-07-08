<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 09/07/18
 * Time: 9:04 AM
 */

//Define function.
function recArea($l, $w){
  $area = $l * $w;
  return $area;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Rectangle Area Function</title>
</head>

<body>
<h2>Rectangle Area Function</h2>

<?php
//If data not submitted, show form
if(!isset($_POST['submit'])){
?>
<form method="post" action="FunctionUserInput.php">
<h3>Please enter the values of the length and width of your rectangle.</h3>
Length:  <input type="text" name="length"><br>
Width:  <input type="text" name="width"><br>
<input type="submit" name="submit" value="Go" />
</form>
<?php
//If data submitted, process and output it back to user
} else {
//Retrieve user values.
$length = $_POST['length'];
$width= $_POST['width'];
//Use function with user values in statement.
echo "The area of a rectangle with length $length and width $width is " . recArea($length, $width). ".";
}
?>
</body>
</html>
