<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        $n4 = $_GET['nota4'];
        $n5 = $_GET['nota5'];

        if ($n1<0 || $n1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if ($n2<0 || $n2 >7.0){
            echo "El valor de la nota 2 es incorrecto";
        }else if ($n3<0 || $n3 >7.0){
            echo "El valor de la nota 3 es incorrecto";
        }else if ($n4<0 || $n4 >7.0){
            echo "El valor de la nota 4 es incorrecto";
        }else if ($n5<0 || $n5 >7.0){
            echo "El valor de la nota 5 es incorrecto";

        }else{



        $promedio =($n1+$n2+$n3+$n4+$n5)/5;

        echo "el promedio es: ".$promedio;
    }
}
?>