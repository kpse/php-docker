<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Php deployment</title>
</head>
<body>

<h2><?php
	$version = getenv('PHP_PROJECT_VER') ?: 'local_dev';
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
spl_autoload_register(function ($class_name) {
	include_once '../src/' . $class_name . '.php';
});
$class1 = new ConcreteClass1;
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
echo $class2->prefixValue('FOO_') ."\n";
?>

<h3>Twig</h3>

<?php
include_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('../src/templates');

$twig = new Twig_Environment($loader, array(
	'cache' => './cache',
));
echo $twig->load('sample.twig')->render(array('my_var' => 'some value'));
?>

</body>
</html>