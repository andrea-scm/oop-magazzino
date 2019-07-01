<?php

require_once "magazzino.php";

class Clothes extends Magazzino{
  public $gender;
  public $type;
  public $material;
  public $fancy;
  public function __construct($area,$size,$color,$brand,$collection,$price,$amount,$fancy,$gender,$material,$type){
    parent::__construct($area,$size,$color,$brand,$collection,$price,$amount);
    $this->fancy = $fancy;
    $this->gender = $gender;
    $this->material = $material;
    $this->type = $type;
  }

  function getArea(){
    if ($this->area != "Clothes") {
      throw new \Exception("Sei nell'area sbagliata,questa è quella dei vestiti! Cambia l'area nel primo parametro della dichiarazione della variabile \$vestito.");
    }
    return $this->area;
  }
}



?>
