<?php
    if (isset($_GET["submit"]) && !empty($_GET["submit"])){
        $nom = $_GET["nombre"];
        $caracteres = $_GET["caracteres"];


        $resultado = strpos($nom, $caracteres);

        if($resultado === false){
            echo "Valor no fue encontrado en la cadena de caracteres";
        }else{
            echo "Valor de cadenas de caracteres fue encontrado posición :" .$resultado;     
        }
    }
?>