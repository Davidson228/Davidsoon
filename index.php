<?php
require 'vendor/autoload.php';
require 'Cat.php';
echo 'hello my name is David';
$app = new \atk4\ui\App('Игрушечка');
$app->initLayout('Centered');


 $candy1 = new Candy;
 $candy1 -> name = 'Serenade';
 $candy1 -> colour = 'blue';
 $candy1 -> price = '8'
 $label = $app->add(['Label', 'Serenade', 'blue','icon'=>'alarm']);

 $candy2 = new Candy;
 $candy2 -> name = 'Lacishi';
 $candy2 -> colour = 'teal';
 $candy2 -> price = '5';

 $candy3 = new Candy;
 $candy3 -> name = 'Lukss';
 $candy3 -> colour = 'red';
 $candy3 -> price = '9';

 $candy4 = new Candy;
 $candy4 -> name = 'Vaverite';
 $candy4 -> colour = 'green';
 $candy4 -> price = '7';
