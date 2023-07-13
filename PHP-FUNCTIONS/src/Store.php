<?php

namespace App;

class Store
{
    //Ejercicio 1 -> escribe una función llamada increase() que sume 1 a un valor dado.
    //Exercise 1 -> write a function called increase() that adds 1 to a given value.
    //Escribe tu código aquí...
    public function increase($num){
        $result = $num + 1;
        return $result;
    }

    //Ejercicio 2 -> escribe una función llamada decrease() que reste 1 a un valor dado. Cuando llegue a 0 se quedará en 0 y no bajará a números negativos.
    //Exercise 2 -> write a function called decrease() that subtracts 1 from a given value. When it reaches 0 it will stay at 0 and will not go down to negative numbers.
    //Escribe tu código aquí...
    public function decrease($num) {
        if ($num > 0) {
          $result = $num - 1;
        } else {
          $result = 0;
        }
        return $result;
      }

    //Ejercicio 3 -> escribe una función llamada rateByPrice() que devuelva el signo € si el valor es de 0 a 50, devuelva €€ si el valor es de 50.01 a 100 y devuelva €€€ si el valor es de 100.01 para arriba.
    //Exercise 3 -> write a function called rateByPrice() that returns the € sign if the value is from 0 to 50, returns €€ if the value is from 50.01 to 100 and returns €€€ if the value is 100.01 for up.
    //Escribe tu código aquí...
    public function rateByPrice($value) {
        if ($value >= 0 && $value <= 50) {
          return '€';
        } elseif ($value > 50 && $value <= 100) {
          return '€€';
        } elseif ($value > 100) {
          return '€€€';
        }
      }

    //Ejercicio 4 -> escribe una función llamada randomItem() que devuelva 3 números de manera aleatoria dentro de un array, pasándole un máximo de números a escoger.
    //Exercise 4 -> write a function called randomItem() that returns 3 numbers randomly within an array, passing a maximum of numbers to choose from.
    //Escribe tu código aquí...
    public function randomItem($maxNumbers) {
        $numbers = range(1, $maxNumbers);
        shuffle($numbers);
        $result = array_slice($numbers, 0, 3);
        return $result;
      }

    //Ejercicio 5 -> escribe una función llamada getItem() que devuelva un array que contengan todos los elementos que tengan un valor menor o igual a un valor dado.
    //Exercise 5 -> write a function called getItem() that returns an array containing all items that have a value less than or equal to a given value.
    //Escribe tu código aquí...
    public function getItem($array, $value) {
        $result = [];
        foreach ($array as $item) {
          if ($item <= $value) {
            $result[] = $item;
          }
        }
        return $result;
      }
    // OTRA FORMA DE HACERLO CON UN FOR
    // function getItem($array, $value) {
    //     $result = [];
    //     $length = count($array);
    //     for ($i = 0; $i < $length; $i++) {
    //       if ($array[$i] <= $value) {
    //         $result[] = $array[$i];
    //       }
    //     }
    //     return $result;
    //   }

}
