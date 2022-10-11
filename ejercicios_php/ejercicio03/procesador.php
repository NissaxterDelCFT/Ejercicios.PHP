<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        $n4 = $_GET['nota4'];
        $p1 = $_GET['ponderacion1'];
        $p2 = $_GET['ponderacion2'];
        $p3 = $_GET['ponderacion3'];
        $p4 = $_GET['ponderacion4'];

        $suma_ponderacion= $p1+$p2+$p3+$p4;

        if($p1<=0){
            echo "Error ponderación 1 ";
        }else if($p2<=0){
            echo "Error ponderación 2 ";
        }else if($p3<=0){
            echo "Error ponderación 3 ";
        }else if($p4<=0){
            echo "Error ponderación 4 ";
        }else if($p1>=100){
            echo "Error ponderación 1 (valor)";
        }else if($p2>=100){
            echo "Error ponderacion 2 (valor)";
        }else if($p3>=100){
            echo "Error ponderación 3 (valor)";
        }else if($p4>=100){
            echo "Error ponderación 4 (valor)";

        }else if($suma_ponderacion>100){
            echo "El calculo de la ponderación es INVALIDO ";
        }else if ($n1<0 || $n1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if ($n2<0 || $n2 >7.0){
            echo "El valor de la nota 2 es incorrecto";
        }else if ($n3<0 || $n3 >7.0){
            echo "El valor de la nota 3 es incorrecto";
        }else if ($n4<0 || $n4 >7.0){
            echo "El valor de la nota 4 es incorrecto";
        }else{

        $promedio =(($n1*($p1/100))+($n2*($p2/100))+($n3*($p3/100))+($n4*($p4/100)));
        if ($n1>=4.0){
            echo "Felicidades 'APROBÓ', con una nota de: ".$promedio;
        }else{
            echo "Intentelo para proxima 'REBROBÓ', con una nota de: ".$promedio;
        }
    }
}
?>