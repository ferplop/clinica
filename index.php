<?php
//Requiriendo Archivos Necesarios para el proyecto
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/conexion.php";

//Creacion de plantilla con POO
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();