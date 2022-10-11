<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"]) ){

        $nom = $_POST['nombre'];
        $apell = $_POST['apellido'];
        $rut = $_POST['rut'];
        $correo = $_POST['correo_electronico'];

        if(empty($nom)){
            echo "Agrega tu nombre<br>";
        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,20}$/", $_POST["nombre"])){
            echo "ERROR nombre INVALIDO<br>";
        }else if(empty($apell)){
            echo "Agrega tu apellido<br>";
        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,25}$/", $_POST["apellido"])){
            echo "ERROR apellido INVALIDO<br>";
        }else if(is_numeric($apell)){
            echo "ERROR se detecto un numero en tu Apellido<br>";
        }else if(empty($rut)){
            echo "Agrega tu rut<br>";
        }else if(!preg_match("/^[0-9.-]{12,13}$/", $_POST["rut"])){
            echo "ERROR rut INVALIDO<br>";
        }else if(empty($correo)){
            echo "Agrega tu correo electronico<br>";
        }else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "ERROR problemas con el GMAIL<br>";
        }else{
            echo "Felicidades te registraste con exito.<br><b>Te registraste como:</b> ".$nom. " ".$apell;
        }
    }
?>