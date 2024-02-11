<?php

//La fecha 'DATE'

echo date("y/m/d") . "\n";  //24/02/11
echo date("y_m_d") . "\n";  //24_02_11 Es valido cualquier separador

echo date("y") ."\n";       //24
echo date("d"). "\n";       //11

//La hora:
echo date("h/i/s") . "\n";  //04/00/31
echo date("H") ."\n";        //16 -> horas pero en formato de 24 horas

?>