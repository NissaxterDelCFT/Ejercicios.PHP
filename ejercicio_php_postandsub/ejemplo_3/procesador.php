<?php
    if (isset($_GET["submit"]) && !empty($_GET["submit"])){
        $pala = $_GET["palabra"];
        $canti = $_GET["cantidad"];

        $resultado = substr($pala, $canti);

        if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{4,20}$/", $_GET["palabra"])){
            echo "cantidad de caracteres inferior";
        }else if($resultado === false){
            echo "ERROR";
        }else{
            echo "la cantidad ingresada fue: ".$canti. "<br>Resultado de substr: " .$resultado;
        }
    }
?>