<?php
CLass Candy {
  public $colour;
  public $price;
  public $name;
  public function AllPrice($weight){
  $answer = $this->price * $weight;
  return $answer;
}
}
