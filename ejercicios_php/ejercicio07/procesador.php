<?php
    if( isset($_POST["submit"]) && !empty($_POST["submit"]) ){
        $nom = $_POST["nombre"];
        $apell = $_POST["apellido"];
        $rut = $_POST["rut"];
        $correo = $_POST["correo_electronico"];
        $carreras = $_POST["carreras"];

        
        if($carreras=="tns_informatica"){
            echo "Has escogido la mejor carrera";
        }else{
            echo "Muy bien. Vas por buen camino";
        }
    }
?>