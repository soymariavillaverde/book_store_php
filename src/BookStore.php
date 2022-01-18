<?php

namespace App;

class BookStore {

    private $basketPrice = 0;

    public function total(array $books): float
    {
        //sabemos si los libros son diferentes
        $compareBooks= $this->compareBooks($books);
        //comprobar cantidades de libro en el array
        $quantityOfBooks = count($books);
        //calcular el precio por unidad
        if($compareBooks == true){
            $this->basketPrice = $quantityOfBooks*8.0*0.05;
            return $this->basketPrice;
        }
        $this->basketPrice = $quantityOfBooks * 8.0;
        //devolver el precio
        return $this->basketPrice;  
    }

 /*    //comparar libros del array para saber si son iguales
    public function compareBooks(array $books){
        //recorrer el array para comprobar los valores de los libros
        $differentBooks = false;
        for ($i=0; $i <= count($books) ; $i++) { 
            //comparar el valor que está en el índice 0 con el siguiente
            //if($books[$i+1] == null) break;

            if ($books[$i] != $books[$i+1]){
                $differentBooks = true;
            }
        }
        return $differentBooks;
    } */

}
