<?php


$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');
class Places extends \atk4\data\Model {
 public $table = 'friends';
 function init() {
   parent::init();
   $this->addField('name');
   $this->addField('surname');
   $this->addField('deparure_date',['type'=>'date']);
   $this->addField('email');
   $this->addField('arrival_date',['type'=>'date']);
 }
}

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');
class Clients extends \atk4\data\Model {
 public $table = 'friends';
 function init() {
   parent::init();
   $this->addField('name');
   $this->addField('surname');
   $this->addField('arrival_date');
   $this->addField('email');
   $this->addField('deparure_date',['type'=>'date']);

 }
}
