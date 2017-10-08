<?php
require 'vendor/autoload.php';
echo 'hello my name is david';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('E-klase');
$button->icon = 'find';
$button->link('https://www.e-klase.lv');
$button->addClass('small red');

$button = $app->add('Button');
$button->set('Heroku');
$button->icon = 'rebel';
$button->link('https://www.heroku.com');
$button->addClass('orange');

$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'steam square';
$button->link('http://store.steampowered.com');
$button->addClass('big yellow');

$button = $app->add('Button');
$button->set('Semantic');
$button->addClass('huge green');
$button->link('https://semantic-ui.com');
$button->icon = 'empire';

$button = $app->add('Button');
$button->set('Apple Shop');
$button->icon = 'apple';
$button->link('https://www.apple.com');
$button->addClass('small teal');
