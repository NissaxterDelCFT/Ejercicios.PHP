<?php
    if (isset($_GET["submit"]) && !empty($_GET["submit"])){
        $pala = $_GET["palabra"];
        $busc = $_GET["buscar"];
        $canti = $_GET["cantidad"];

        $met_pos = strpos($pala, $busc);
        $met_sub = substr($pala, $canti);
        $diccionario = "abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ";
        $condicion = true;

        for ($met_pos = 0; $met_pos)

    }