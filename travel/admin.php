<?php

require '../vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Admin');

require 'connection.php';
require 'visual.php';

$place = new Places($db);
$place->setOrder('name');
$grid = $app->add('Grid');
$grid->setModel($place);
$grid->addQuickSearch(['name']);
//$grid->addDecorator('name', new \atk4\ui\TableColum\Link('placelist.php?id={$id}'));
