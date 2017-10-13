<?php
require 'vendor/autoload.php';
echo 'hello my name is David';
$app = new \atk4\ui\App('Galijo');
$app->initLayout('Centered');
//$button -> link('')
$label = $app->add(['Label', 'Astralis','big brown','icon'=>'fort awesome']);
