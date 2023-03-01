<?php
//Requiriendo Archivos Necesarios para el proyecto
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";

//Creacion de plantilla con POO
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();