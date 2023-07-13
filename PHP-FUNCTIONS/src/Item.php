<?php

namespace App;
class Item {
    //Ejercicio 1 -> Crear una clase Item que tenga 3 propiedades: name, price y quantity cuyo valor será declarado al crear un objeto. Cada propiedad debe ser capaz de ser retornada con un método propio.
    //Exercise 1 -> Create an Item class that has 3 properties: name, price and quantity whose value will be declared when creating an object. Each property must be able to be returned with its own method.
    //Escribe tu código aquí...
    private $name;
    private $price;
    private $quantity;
  
    public function __construct($name, $price, $quantity) {
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getPrice() {
      return $this->price;
    }
  
    public function getQuantity() {
      return $this->quantity;
    }
  }
