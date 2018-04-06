<?php
require '../vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Admin');
require 'connection.php';
require 'visual.php';
$form = $app->layout->add('Form');
$form->setModel(new Clients($db));
