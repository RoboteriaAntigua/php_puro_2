<?php
    //Filters 

    //filter_var
//Es usado para limpieza y validacion de formularios:

use function PHPSTORM_META\map;

$str = "<h1>Hello World!</h1>";                     //Le borramos los <h1>
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

//Hay un monton de otros filters: https://www.w3schools.com/php/php_ref_filter.asp
// xejemplo: FILTER_SANITIZE_EMAIL FILTER_VALIDATE_URL ETC



//Mapeo, array_map() y print_r
//array_map() -> somete a los elementos de un arreglo a una funcion uno por uno.
//print_r -> imprime una variable en un formato entendible para humanos
function funcion1($par1){
    return $par1*3.14;
}
$arreglo=[1,2,3,4,5,6,7,8,9];
$mapeada = array_map("funcion1", $arreglo);
print_r( $mapeada);
?>