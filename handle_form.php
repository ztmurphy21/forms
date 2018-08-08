<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your Feedback</title>
</head>

<body>
<?php
    
ini_set('display_errors', 1);
//this page receives the data from feedback.html
//it will receive: title, name, email, response, comments, and submit in $_POST

//create shorthand versions of the vars:

$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

//print the received data:
print "<p>Thank you, $title $name, for your commnets. <br>
You stated that you found this example to be '$response' and added:<br>$comments</p>";

?>
</body>
    
</html>