<?php
require 'vendor/autoload.php';
echo 'hello my name is david';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Start');
$button->icon = 'plus';
