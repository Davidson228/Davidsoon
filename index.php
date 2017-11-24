<?php
require 'vendor/autoload.php';
require 'Cat.php';
echo 'hello my name is David';
$app = new \atk4\ui\App('Игрушечка');
$app->initLayout('Centered');
/*$button = $app->add('Button');
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
$button->addClass('big teal');

$button = $app->add('Button');
$button->set('GitHub');
$button->icon = 'github';
$button->link('https://github.com');
$button->addClass('blue');

$button = $app->add('Button');
$button->set('Homework');
$button->icon = 'book';
//$button->link('https://www.instagram.com');
$button->addClass('small violet');

$button -> link('link.php');
$label = $app->add(['Label', 'Astralis','big brown','icon'=>'fort awesome','detail' =>'hello' ]);
$img = 'https://pbs.twimg.com/profile_images/832222243614756864/GM50ie3U.jpg';
$icon = $app->add(['Image', $img]);*/

//$label = $app->add(['Label', 'Домашнее задание кнопка Homework', 'black','icon'=>'alarm']);

/*$button = $app->layout->add(['Button','Hello']);
$button->link(['test', 'name'=>'David', 'surname'=>'Arinsh']);
//$button->link(['test', 'surname'=>'Arinsh']);

$button = $app->add('Button');
$button->set('1');
$button->icon = 'book';
$button->addClass('massive');
$button->link(['test', 'name'=>'1']);

$button = $app->add('Button');
$button->set('2');
$button->icon = 'book';
$button->addClass('massive');
$button->link(['test', 'name'=>'2']);

$button = $app->add('Button');
$button->set('3');
$button->icon = 'book';
$button->addClass('massive');
$button->link(['test', 'name'=>'3']);

 $text = $app -> add (['Text','Стартуем']);
 $button =$app->add(['Button','START GAME']);
 $button->link(['test', 'min'=>0, 'max'=>100]);*/

 $cat1 = new Cat;
 $cat1 -> age = '0.8';
 $cat1 -> sex = 'male';
 $cat1 -> colour = 'White'
 $cat1 -> name = 'Банан';

 $cat2 = new Cat;
 $cat2 -> age = '0.2';
 $cat2 -> sex = 'male';
 $cat2 -> colour = 'Black'
 $cat2 -> name = 'Олег';

 $cat3 = new Cat;
 $cat3 -> age = '2';
 $cat3 -> sex = 'female';
 $cat3 -> colour = 'Grey'
 $cat3 -> name = 'Колян';

 $cat4 = new Cat;
 $cat4 -> age = '0.5';
 $cat3 -> sex = 'female';
 $cat4 -> colour = 'Red'
 $cat4 -> name = 'Лёха';
 
