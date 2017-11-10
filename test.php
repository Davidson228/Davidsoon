<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');

$min = $_GET['min'];
$max = $_GET['max'];
$mid =round ( ($max + $min) / 2);
$label = $app->add(['Label', 'Твоё число это '.$mid.' ?', 'black','icon'=>'alarm']);
