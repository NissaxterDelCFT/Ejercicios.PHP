<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $p1 = $_GET['ponderacion1'];
        $p2 = $_GET['ponderacion2'];

        $suma_ponderacion= $p1+$p2;
        if($suma_ponderacion>100){
            echo "El calculo de la ponderación es INVALIDO ";
        }else if ($n1<0 || $n1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if ($n2<0 || $n2 >7.0){
            echo "El valor de la nota 2 es incorrecto";
        }else{

        $promedio =(($n1*($p1/100))+($n2*($p2/100)));
        if ($n1>=4.0){
            echo "Felicidades 😃'APROBÓ'😃, con una nota de: ".$promedio;
        }else{
            echo "Intentelo para proxima 😢'REBROBÓ'😢, con una nota de: ".$promedio;
        }
    }
}
?>