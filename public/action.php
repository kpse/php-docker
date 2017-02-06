<?php
include_once '../src/template_autoload.php';
$twig->load('header.twig')->display(array('title' => 'Greeting'));
$twig->load('action.twig')->display(array('profile' => $_POST));
$twig->load('footer.twig')->display(array());
