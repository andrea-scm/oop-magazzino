<?php

 require_once "magazzino.php";
 require_once "shoes.php";
 require_once "clothes.php";


 $magazzino = new Magazzino(NULL,"M","black","Nike","Summer 2019",80,NULL);

 $magazzino->setId('4932');

 echo "<pre>";
 var_dump($magazzino);
 echo "</pre>";

 $scarpa = new Shoes("Shoes","42","white","Lacoste","Summer 2019",200,10,"l12.12","Male","Leather");
 $scarpa->setId('2393');
 $scarpa->setDisponibility();
 echo "<pre>";
 var_dump($scarpa);
 echo "</pre>";

 $vestito = new Clothes("Shoes","M","black","The Kooples","Summer 2019",120,15,"Floreal","Male","Cotton","Shirt");
 $vestito->setId('4212');
 $vestito->setDisponibility();

 echo "<pre>";
 var_dump($vestito);
 echo "</pre>";

 try {
  echo "Prezzo scontato: ".$scarpa->sales("40%"). "€";
  echo "<br>";
 } catch (\Exception $e) {
  echo "Eccezione: ". $e->getMessage();
  echo "<br>";
 }

 try {
   echo "Sei nell'area ". $scarpa->getArea();
   echo "<br>";
 } catch (\Exception $e) {
   echo "Eccezione: ". $e->getMessage();
   echo "<br>";
 }

 try {
   echo $vestito->getArea();
   echo "<br>";
 } catch (\Exception $e) {
   echo "Eccezione: ". $e->getMessage();
   echo "<br>";
 }

?>
