<?php

namespace App;

class BookStore {

    private $basketPrice = 0;

    public function total(array $books): float
    
    {
        $test = array_diff([1], [1]);// o array push e ir haciendo arrays bidimensionales 
        var_dump(count($test));
        //comprobar cantidades de libro en el array
        $quantityOfBooks = count($books);
        //calcular el precio por unidad
        $this->basketPrice = $quantityOfBooks * 8.0;
        //devolver el precio
        return $this->basketPrice;  
    }

    

}
