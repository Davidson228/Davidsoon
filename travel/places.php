<?php

require '../vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Admin');

require 'connection.php';
require 'visual.php'; 

$place = new Places($db);
$place->setOrder('name');
$crud = $app->add('Crud');
$crud->setModel($place);
