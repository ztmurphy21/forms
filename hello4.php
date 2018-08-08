<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Greetings!</title>
    <style type="text/css">
        .bold{
            font-weight: bolder;
        }
    </style>
</head>
<body>
<?php
//show errors
ini_set('display_errors', 1);
//show all possible issues
error_reporting(E_ALL);

//this page should receive a name value in the url
    
//Say hello
$name = $_GET['name'];
print "<p> Hello, <span class=\"bold\">$name</span>!</p>";
    
?>
</body>
    
</html>