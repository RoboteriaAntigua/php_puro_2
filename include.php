<?php

// Include y require copian todo el codigo de un archivo php externo y lo pegan aqui. 
// Include y require son igual expeto cuando hay un error:
        //require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        //include will only produce a warning (E_WARNING) and the script will continue

echo "Tambien se puede llamar estos include y require desde html";
echo include 'date.php';    //Muestra lo que saldrian del archivo date.php



?>