<?php
    session_start();
    $controlador=$_GET['controlador'];
    $metodo=$_GET['metodo'];

    require_once "../CONTROLADORES/" . $controlador . ".php";

    $cHorario=new $controlador();
    $datos=$cHorario->$metodo();

    include $cHorario->vista;
?>