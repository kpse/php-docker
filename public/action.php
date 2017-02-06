<?php
include_once '../src/template_autoload.php';
$twig->load('action.twig')->display(array('profile' => $_POST));

