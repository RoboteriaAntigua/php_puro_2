<?php

//Excepciones como throw try cacth

//throw new Exception()
//Interrumpe la ejecucion de una funcion 
function dividir($dividend,$divisor){
    if($divisor==0){ throw new Exception('No se puede dividir por cero');}
    return $dividend/$divisor;
}
echo "8/2 -> ". dividir(8,2) . "\n";
//echo "7/0 -> ". dividir(7,0) . "\n";        //Tira un fatal error


//try {} catch {}
echo "try {} catch{} \n";
try {
    echo dividir(6,0). "\n";
} catch (Exception $e) {
    echo "no se puede dividr por cero che:  \n";        //Tira solo el mensaje, si usamos la $e tambien da el error
}









?>