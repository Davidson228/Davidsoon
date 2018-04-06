<?php


$db = new
\atk4\data\Persistence_SQL('mysql:dbname=travel;host=localhost','root','');
class Places extends \atk4\data\Model {
 public $table = 'places';
 function init() {
   parent::init();
   $this->addField('name');
    $this->hasMany('Clients', new Clients);
 }
}

class Clients extends \atk4\data\Model {
 public $table = 'clients';
 function init() {
   parent::init();

   $this->addField('name');
   $this->addField('surname');
   $this->addField('departure_date',['type'=>'date']);
   $this->addField('email');
   $this->addField('arrival_date',['type'=>'date']);

   $this->hasOne('places_id', new Places)->addTitle();

 }
}
