<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"]) ){
        $nom = $_POST["nombre"];
        $apell = $_POST['apellido'];
        $rut = $_POST['rut'];
        $correo = $_POST['correo_electronico'];
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        $n4 = $_POST['nota4'];

        $promedio=($n1+$n2+$n3+$n4)/4;

        if(empty($nom)){
            echo "Agrega tu nombre";
        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,20}$/", $_POST["nombre"])){
            echo "ERROR nombre INVALIDO";
        }else if(empty($apell)){
            echo "Agrega tu apellido";
        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,25}$/", $_POST["apellido"])){
            echo "ERROR apellido INVALIDO";
        }else if(is_numeric($apell)){
            echo "ERROR se detecto un numero en tu Apellido";
        }else if(empty($rut)){
            echo "Agrega tu rut";
        }else if(!preg_match("/^[0-9.-]{12,13}$/", $_POST["rut"])){
            echo "ERROR rut INVALIDO";
        }else if(empty($correo)){
            echo "Agrega tu correo electronico";
        }else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "ERROR problemas con el GMAIL";
        }else if(empty($n1)){
            echo "nota 1 sin valor";
        }else if(empty($n2)){
            echo "nota 2 sin valor";
        }else if(empty($n3)){
            echo "nota 3 sin valor";
        }else if(empty($n4)){
            echo "nota 4 sin valor";
        }else if ($n1<0 and $n1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota1"])){
            echo "ERROR ingreso un caracter INVALIDO (notas 1)";
        }else if ($n2<0 and $n2 >7.0){
            echo "El valor de la nota 2 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota2"])){
            echo "ERROR ingreso un caracter INVALIDO (notas 2)";
        }else if ($n3<0 and $n3 >7.0){
            echo "El valor de la nota 3 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota3"])){
            echo "ERROR ingreso un caracter INVALIDO (notas 3)";
        }else if ($n4<0 and $n4 >7.0){
            echo "El valor de la nota 4 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota1"])){
            echo "ERROR ingreso un caracter INVALIDO (notas 1)";
        }else if ($promedio>=4.0){
            echo "Fecidades aprobaste con un PROMEDIO de: ".$promedio;
        }else{
            echo "Lamentablemente REPROBASTE con un PROMEDIO de: ".$promedio;
        }
    }