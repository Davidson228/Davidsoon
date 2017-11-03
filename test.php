<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');

$c = $_GET['name'];
$label = $app->add(['Label', $c]);
$label = $app->add(['Label', $c]);
