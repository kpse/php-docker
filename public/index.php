<?php
include_once '../src/template_autoload.php';
$twig->load('header.twig')->display(array('title' => 'Home page'));
?>

<h2><?php
	$version = getenv('PHP_PROJECT_VER') ?: 'local_dev';
    echo "Hi, I'm a PHP project! my version is " . $version;
?>
</h2>
<br>

<a href="form.php">Link to profile</a>

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
include_once '../src/template_autoload.php';
$twig->load('sample.twig')->display(array('my_var' => 'some value'));
?>

<?php
include_once '../src/template_autoload.php';
$twig->load('footer.twig')->display(array());
?>