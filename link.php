<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');
//$button -> link('')
$label = $app->add(['Label', 'Astralis','big ','icon'=>'fort awesome','detail' =>'hello' ]);
$text = $app->add(['Text','Astralis']);


$a = 1;
if ($a == 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$color = 'big red';
$label = $app->add(['Label', $name,$color,'icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$a = 1;
if ($a > 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$color = 'big green';
$label = $app->add(['Label', $name,$color,'icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$a = 0;
if ($a < 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$color = 'big red';
$label = $app->add(['Label', $name,$color,'icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$label = $app->add(['Label', $name,'big red','icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$a = 0;
if ($a >= 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$label = $app->add(['Label', $name,'big green','icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$a = 0;
if ($a <= 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$label = $app->add(['Label', $name,'big green','icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);

$a = 0;
if ($a != 0) {
$name  = 'Верно!';
} else {
$name = 'Неверно!';
}
$label = $app->add(['Label', $name,'big red','icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);


$a = 'test';
if ($a == 'test') {
$name  = 'Верно!';
} else {
$name = 'Неверно!';

}$label = $app->add(['Label', $name,'big green','icon'=>'fort awesome']);
$text = $app->add(['Text','Navi']);
