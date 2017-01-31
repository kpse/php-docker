<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Php deployment</title>
</head>
<body>

<h2><?php
	$version = 10.3;
    echo "Hi, I'm a PHP project! my version is " . $version;
?>
</h2>
<br>

<h3>A little calculate function</h3>
<?php
$x = 5 /* + 15 */ + 5;
echo "5 /* + 15 */ + 65 = " . $x;
?>


<br>

<h3>Datetime function</h3>

<?php
$date = new DateTime();
$stamp = $date->format('Y-m-d H:i:s');

echo "The current time is " . $stamp;
?>

<br>


<h3>Class / Objects</h3>

<?php
require(dirname(__DIR__) . '/src/ConcreteClass1.php');
require(dirname(__DIR__) . '/src/ConcreteClass2.php');
$class1 = new ConcreteClass1;
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
echo $class2->prefixValue('FOO_') ."\n";
?>

</body>
</html>