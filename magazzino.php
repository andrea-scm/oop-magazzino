<?php

class Magazzino{
  private $id;
  public $area;
  public $size;
  public $color;
  public $brand;
  public $collection;
  public $price;
  public $amount;
  public $disponibility;

  public function __construct($area,$size,$color,$brand,$collection,$price,$amount){
    $this->area = $area;
    $this->size = $size;
    $this->color = $color;
    $this->brand = $brand;
    $this->collection = $collection;
    $this->price = $price;
    $this->amount = $amount;
  }

  function setDisponibility(){
    if($this->amount > 0){
      $this->disponibility = true;
    }else {
      $this->disponibility = false;
    }
    return $this->disponibility;
  }

  function setId($id){
    $this->id = $id;
  }

  function getId(){
    return $this->id;
  }

  function getArea(){
    return $this->area;
  }

  function sales($percentage){
    if (empty($this->price)) {
      throw new \Exception("Non hai inserito il prezzo");
    }
    $sale = ($this->price * (int)$percentage)/100;
    return $this->price - $sale;
  }

}


?>
