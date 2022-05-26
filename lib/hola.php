<?php
// Autor: Stefan Razvan Raspopescu Marcu <stefan.r95@hotmail.com>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);