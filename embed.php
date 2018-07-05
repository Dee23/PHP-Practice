<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1><?php
    echo "{$book['title']} is written by {$book['author']}";
    ?></h1>

<p><?php
    echo "It's {$book['description']}";
    ?></p>

<h2>Main Characters</h2>
<?php
echo "The main characters in the movie are as follows:";
foreach($characters as $char) {
    echo "<ul>";
    echo "<li>$char</li>";
    echo "</ul>";
}
?>

</body>
</html>