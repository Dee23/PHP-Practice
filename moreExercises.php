<!-Q1. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document. Go to the editor

Sample Output :
PHP Tutorial
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial.

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using a PHP variable as heading and link</title>
</head>
<body>
<?php $var = 'PHP Tutorial'; ?>
<h3><?php echo $var; ?></h3>
<p> PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose
scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
<a href="https://www.w3resource.com/php-exercises/php-basic-exercises.php"><?php echo 'Go To ' .$var; ?></a>
</body>
</html>