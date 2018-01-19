<?php
require 'vendor/autoload.php';
//require 'Laima.php';
//echo 'hello my name is David';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Centered');
/*
 $candy1 = new Candy;
 $candy1 ->name = 'Serenade';
 $candy1 ->colour = 'blue';
 $candy1 ->price = '8';
 $total1 = $candy1->AllPrice(3);
 $label1 = $app->add(['Label',$candy1 ->name.' '.$total1, $candy1 ->colour,'detail'=>$candy1 ->price ,'icon'=>'alarm' ]);

 $candy2 = new Candy;
 $candy2 ->name = 'Lacishi';
 $candy2 ->colour = 'teal';
 $candy2 ->price = '5';
 $label2 = $app->add(['Label',$candy2 ->name,$candy2 ->colour ,'detail'=>$candy2 ->price ,'icon'=>'bitcoin' ]);

 $candy3 = new Candy;
 $candy3 ->name = 'Lukss';
 $candy3 ->colour = 'red';
 $candy3 ->price = '9';
 $label3 = $app->add(['Label',$candy3 ->name,$candy3 ->colour ,'detail'=>$candy3 ->price ,'icon'=>'empire' ]);


 $candy4 = new Candy;
 $candy4 ->name = 'Vaverite';
 $candy4 ->colour = 'green';
 $candy4 ->price = '7';
 $label4 = $app->add(['Label',$candy4 ->name,$candy4 ->colour, 'detail'=>$candy4 ->price ,'icon'=>'candy' ]);
 */
/*
 $db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;for_сolibri;host=localhost','root','');
class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>+371]);
    $this->addField('email');
  //  $this->addField('password',['type']);
    $this->addField('birthsday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
}
}
$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record update');
});
$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$grid = $app->layout->add('Grid');
$grid->setModel(new Friends($db));*/

$menu = $app=add('Menu');
$menu->addItem('Shirts');
