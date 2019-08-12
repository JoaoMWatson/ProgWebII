<?php
function converter_hora($hora, $periodo){
    if ($periodo == "AM"){
        return $hora;
    }elseif ($periodo == "PM") return $hora += 12;
    else 
        return "Esse periodo não existe";
}
$hora = 7;
$periodo = "AM";

?>