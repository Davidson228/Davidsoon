<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');
//$button -> link('')
$label = $app->add(['Label', 'Astralis','big brown','icon'=>'fort awesome','detail' =>'hello' ]);
$text = $app->add(['Text','Astralis']);
$a = -100;
if ($a > 0) {
  echo 'Верно!';
} else {
  echo 'Неверно!';
}
label = $app->add(['Label', 'Navi','big pink','icon'=>'fort awesome','detail' =>'Сливаю не сливаемое, тащу нетащимое' ]);
$text = $app->add(['Text','Navi']);
