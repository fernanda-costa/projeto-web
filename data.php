<?php
function dateEmMysql($dateSql){
    $ano = substr($dateSql, 6);
    $mes = substr($dateSql, 0,-8);
    $dia = substr($dateSql, 3,-5);
    return $ano."-".$mes."-".$dia;
}


?>