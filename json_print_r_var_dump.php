<?php

//json_encode()
//Convierte un arreglo asociativo php en un json
$miArreglo = [
    "it's about that time" => 'ya casi es hora',
    "you've got to be kidding me" => "debes estar bromeando",
    "i've got to run"   => "debo irme"
];
echo json_encode($miArreglo);


//json_decode()
//Alrrebes
$miJson = '{"all in all":"en general","im outta here":"me voy de aqui" }';
print_r(json_decode($miJson));
var_dump(json_decode($miJson));

//var_dump() y print_r() son muy buenas para imprimir arreglos y arreglos asociativos, para ver que esta pasando



//json_decode() de vuelve un objeto, que se puede usar asi:
$form= '{"name":"ro","age":37}';
$miObjeto = json_decode($form);
echo $miObjeto->name . "\n";            //ro
echo $miObjeto->age ."\n";              //37

//Looping un json en php
$articulo= '{"name":"tv", "value":1000,"stock":3}';
$miArticulo = json_decode($articulo);
foreach($miArticulo as $key => $value){
    echo $key. " <-----> ". $value . "\n";
}

//Un objeto adentro de otro: NO FUNCIONA
//$lista = '{"name":"cel1", "value":333,"stock":3}, {"name":"zapatillas", "value":555,"stock":2},{"name":"paraguas", "value":155,"stock":4}';
//$miLista = json_decode($lista);
//var_dump($miLista);

?>