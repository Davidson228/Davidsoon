<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');

$min = $_GET['min'];
$max = $_GET['max'];

if (($max-$min==1) and (ISSET($_GET['key']))){
$text = $app -> add (['Text','Ошибка']);
$button4=$app->add(['Button','RESTART']);
$button4->link(['index']);
}else{

$mid =round ( ($max + $min) / 2);
$label = $app->add(['Label', 'Твоё число это '.$mid.' ?', 'black','icon'=>'alarm']);


$button1->set('Да это моё число');

$button2 = $app->add('Button');
$button2->set('Нет моё число меньше');
$button2->link(['test', 'min'=>$min, 'max'=>$mid,'key'=>'key']);

$button3 = $app->add('Button');
$button3->set('Нет моё число больше');
$button3->link(['test', 'min'=>$mid, 'max'=>$max, 'key'=>'key']);
}
