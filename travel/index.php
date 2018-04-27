<?php
require '../vendor/autoload.php';
require 'app.php';
$app = new App('public');
$app->initLayout('Admin');
require 'connection.php';
require 'visual.php';
$form = $app->layout->add('Form');
$form->setModel(new Record($db));
?>
