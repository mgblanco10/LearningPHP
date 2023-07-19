<?php

namespace App;

class Functions
{
    //Ejercicio 1 -> escribe una función llamada sum() que devuelva la suma de 2 números dados.
    //Exercise 1 -> Write a function called sum() that returns the sum of 2 given numbers.
    public function sum($num1, $num2){
        return $num1 + $num2;
    }

    //Ejercicio 2 -> escribe una función llamada reverse() que cambie a orden inverso los caracteres de un string dado.
    //Exercise 2 -> write a function called reverse() that reverses the characters in a given string.
    //Escribe tu código aquí...
    public function reverse($string){
        return strrev($string);
    }

    //Ejercicio 3 -> escribe una función llamada eachCharToArray() que convierta un string en un array donde cada elemento del array corresponda a un caracter del string dado, se debe eliminar los espacios vacios.
    //Exercise 3 -> write a function called eachCharToArray() that converts a string into an array where each element of the array corresponds to a character of the given string, empty spaces must be removed.
    //Escribe tu código aquí...
    public static function eachCharToArray($string) {
        $array = str_split($string);
        $array = array_filter($array, function($value) {
            return $value !== ' ';
        });

        return array_values($array);
    }

    // OTRA FORMA
    // function eachCharToArray($string) {
    //   $textosinespacios = str_replace(' ', '', $string);
    //   return str_split($textosinespacios);
    // } 

    //Ejercicio 4 -> escribe una función llamada eachWordToArray() que convierta un string en un array donde cada elemento del array corresponda a una palabra del string dado, se deben eliminar los elementos vacios.
    //Exercise 4 -> write a function called eachWordToArray() that converts a string to an array where each element of the array corresponds to a word of the given string, empty elements must be removed.
    //Escribe tu código aquí...
    public function eachWordToArray($string) {
        $string = trim($string);
        $words = explode(' ', $string);
        
        $words = array_filter($words, function($word) {
          return !empty($word);
        });
        
        $words = array_values($words);   
        return $words;
      }

    //Ejercicio 5 -> escribe una función llamada isBoolean() que devuelva si un valor dado es booleano o no.
    //Exercise 5 -> write a function called isBoolean() that returns whether a given value is boolean or not.
    //Escribe tu código aquí...
    public function isBoolean($value){
        if(is_bool($value)){
            return true;
        }else{
            return false;
        }
    }

    //Ejercicio 6 -> escribe una función llamada addItem() y añade pastelito a un array dado.
    //Exercise 6 -> write a function called addItem() and add 'pastelito' to a given array.
    //Escribe tu código aquí...
    public function addItem($array) {
        $array[] = 'pastelito';
        return $array;
      }

    //Ejercicio 7 -> escribe una función llamada updateItem() y cambia el valor de pastelito por tarta.
    //Exercise 7 -> write a function called updateItem() and change the value of 'pastelito' to 'tarta'.
    //Escribe tu código aquí...
    public function updateItem($array) {
        $index = array_search('pastelito', $array);
        if ($index !== false) {
          $array[$index] = 'tarta';
        }
        return $array;
      }

    //Ejercicio 8 -> escribe una función llamada deleteItem() que elimine helado del array dado porque me lo comí y ya no lo quiero en la lista. Mira que las claves del array queden ordenadas.
    //Exercise 8 -> write a function called deleteItem() that removes 'helado' from the given array because I ate it and don't want it in the list anymore. See that the keys of the array are ordered.
    //Escribe tu código aquí...
    public function deleteItem($array) {
        $index = array_search('helado', $array);
        if ($index !== false) {
          unset($array[$index]);
          $array = array_values($array);
        }
        return $array;
      }

    //Ejercicio 9 -> escribe una función llamada joinMeals() que junte 2 arrays dados para completar mi comida.
    //Exercise 9 -> write a function called joinMeals() that joins 2 given arrays to complete my meal.
    //Escribe tu código aquí...
    public function joinMeals($array1, $array2) {
        $meal = array_merge($array1, $array2);
        return $meal;
      }
}
