<?php
// Autor: Stefan Razvan Raspopescu Marcu <stefan.r95@hotmail.com>
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";