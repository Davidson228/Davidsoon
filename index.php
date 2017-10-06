<?php
require 'vendor/autoload.php';
echo 'hello my name is david';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('E-klase');
$button->icon = 'find';
$button->link('https://www.e-klase.lv');
$button = $app->add('Button');
$button->set('Heroku');
$button->icon = 'find';
$button->link('https://www.heroku.com');
