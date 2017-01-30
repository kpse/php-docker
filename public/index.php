<!DOCTYPE HTML>
<html>
<head>
    <title>Example</title>
</head>
<body>

<?php
            echo "Hi, I'm a PHP script!";

        ?>
<br>

<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>


<br>

<?php
$date = new DateTime();
$stamp = $date->format('Y-m-d H:i:s');

echo "The last release date is " . $stamp;
?>

</body>
</html>