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
$button->icon = 'find';
$button->link('https://www.heroku.com');
$button->addClass('blue');
$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'find';
$button->link('http://store.steampowered.com');
$button->addClass('big green');
$button = $app->add(['Button', 'Next', 'iconRight'=>'right arrow']);
$button->addClass('black');
$button->link('https://semantic-ui.com')
