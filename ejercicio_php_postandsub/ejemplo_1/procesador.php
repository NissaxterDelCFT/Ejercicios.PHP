<?php
    if (isset($_GET["submit"]) && !empty($_GET["submit"])){
        $nom = $_GET["nombre"];

        $nom2 = $_GET["nombre2"];
        $caracteres = $_GET["caracteres"];

        $cant_letras = strlen($nom);

        $resultado = strpos($nom2, $caracteres);

        $resultado2 = substr($nom2, 0, 4);

        if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{5,20}$/", $_GET["nombre"])){
            echo "cantidad de caracteres inferior";
        }
        else if($resultado === false){
            echo "Valor no fue encontrado en la cadena de caracteres";
        
        }else{
            echo "La cantidad de letras es: ". $cant_letras. "<br>";
            echo "El valor fue encontrado en la cadena de caracteres <br>";
            echo "Resultado de substr: " .$resultado2;
        }
    }
?>