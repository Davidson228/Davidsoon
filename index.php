<?php
require 'vendor/autoload.php';
echo 'hello my name is david';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('E-klase');
$button->icon = 'find';
$button->link('https://www.e-klase.lv');
$button->addClass('red');
$button = $app->add('Button');
$button->set('Heroku');
$button->icon = 'find';
$button->link('https://www.heroku.com');
$button->addClass('blue');
$buton = $app->add('Button');
$button->set('Steam');
$button->icon = 'find';
$button->link('http://store.steampowered.com');
$button->addClass('green')
