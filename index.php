<?php

require_once "clases/conexion/conexion.php";

$conexion = new conexion;

$query = "INSERT INTO pacientes (DNI)VALUE('1')";

print_r($conexion->nonQueryId($query));
