<?php
require 'vendor/autoload.php';
require 'Laima.php';
echo 'hello my name is David';
$app = new \atk4\ui\App('Игрушечка');
$app->initLayout('Centered');


 $candy1 = new Candy;
 $candy1 ->name = 'Serenade';
 $candy1 ->colour = 'blue';
 $candy1 ->price = '8';
 $label1 = $app->add(['Label','detail'=>$candy1 ->price , 'blue','detail'=>$candy1 ->price ,'icon'=>'alarm' ]);

 $candy2 = new Candy;
 $candy2 ->name = 'Lacishi';
 $candy2 ->colour = 'teal';
 $candy2 ->price = '5';
 $label2 = $app->add(['Label', 'detail'=>$candy2 ->price, 'teal','detail'=>$candy2 ->price ,'icon'=>'bitcoin' ]);

 $candy3 = new Candy;
 $candy3 ->name = 'Lukss';
 $candy3 ->colour = 'red';
 $candy3 ->price = '9';
 $label3 = $app->add(['Label','detail'=>$candy3 ->price,, 'red','detail'=>$candy3 ->price ,'icon'=>'empire' ]);



 $candy4 = new Candy;
 $candy4 ->name = 'Vaverite';
 $candy4 ->colour = 'green';
 $candy4 ->price = '7';
 $label4 = $app->add(['Label','detail'=>$candy4 ->price,, '','detail'=>$candy4 ->price ,'icon'=>'candy' ]);
