<?php
 
$layout = $app->layout;

$layout->leftMenu->addItem(['Main page','icon'=>'building'],['index']);

$layout->leftMenu->addItem(['Place','icon'=>'tree'],['places']);

$layout->leftMenu->addItem(['Admin','icon'=>'user circle'],['admin']);
