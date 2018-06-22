<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Input</title>
</head>
<body>

<form action="index.php" method="POST">
   Name: <input type="text" name="person">
    <button>SUBMIT</button>
</form>
<?php
 if($_POST)
 {
     echo $name = $_POST['person'];
     $fileHandle = fopen("myDataFile", 'w');
     fwrite($fileHandle, $name);
     fclose($fileHandle);
 }

?>
</body>
</html>

