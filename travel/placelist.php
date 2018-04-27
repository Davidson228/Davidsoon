<?php

require '../vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Admin');

require 'connection.php';
require 'visual.php';

$place=new Places($db);
$place->load($_GET['id']);
$record=$place->ref('Clients');
$record->setOrder('name');
$grid = $app->add('Grid');
$grid->setModel($record);
