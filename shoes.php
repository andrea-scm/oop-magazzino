<?php

  require_once "magazzino.php";

  class Shoes extends Magazzino{
    public $model_name;
    public $gender;
    public $material;

    public function __construct($area,$size,$color,$brand,$collection,$price,$amount,$model_name,$gender,$material){
      parent::__construct($area,$size,$color,$brand,$collection,$price,$amount);
      $this->model_name = $model_name;
      $this->gender = $gender;
      $this->material = $material;
    }

    function getArea(){
      if ($this->area != "Shoes") {
        throw new \Exception("Sei nell'area sbagliata,questa è quella della scarpe");
      }
      return $this->area;
    }
  }


?>
