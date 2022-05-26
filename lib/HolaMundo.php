<?php
// Autor: Stefan Razvan Raspopescu Marcu <stefan.r95@hotmail.com>
class HolaMundo
{
   private $nombre;

   function __construct($nombre)
   {
      $this->nombre = $nombre;
   }

   function __toString()
   {
      return sprintf ("Hola, %s.\n", $this->nombre);
   }
}