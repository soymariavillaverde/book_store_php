<?php

namespace App;

class BookStore {

    private $basketPrice = 0;

    public function total(array $books): float
    
    {

             //comprobar cantidades de libro en el array
            $quantityOfBooks = count($books);
            //calcular el precio por unidad
            $this->basketPrice = $quantityOfBooks * 8.0;
            //devolver el precio
            return $this->basketPrice;
    }

    
   
   /* 
    public function total(array $books): float
    
    {
        //creamos la cesta vacía
        $basket= [];
        //extrae los elementos diferentes a modo de string
        $differents = array_diff([1,2,3,4,5], $basket);
        //cuenta el número de elementos diferentes
        $countDifferents = count($differents);        
        var_dump($countDifferents);
        


        //comprobar cantidades de libro en el array
        $quantityOfBooks = count($books);
        //calcular el precio por unidad
        $this->basketPrice = $quantityOfBooks * 8.0;

        //calcula el precio según el descuento pr cantidad de libros
        if($countDifferents === 0){
            $this->basketPrice = ($quantityOfBooks * 8.0) * 0.75;
            return $this->basketPrice; 
        }

        if($countDifferents === 1){
            $this->basketPrice = ($quantityOfBooks * 8.0) * 0.8;
            return $this->basketPrice; 
        }

        if($countDifferents === 2){
            $this->basketPrice = ($quantityOfBooks * 8.0) * 0.9;
            return $this->basketPrice; 
        }

        if($countDifferents === 3){
            $this->basketPrice = ($quantityOfBooks * 8.0) * 0.95;
            return $this->basketPrice; 
        }

        //devolver el precio
        return $this->basketPrice;  

    } */

}