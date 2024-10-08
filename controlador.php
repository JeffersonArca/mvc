<?php
   //Se incluye el modelo
   //El patrón de MVC dice que la capa CONTROLADOR, es la encargada de pasar los datos del MODELO a la VISTA

//Este archivo requiere el MODELO e incluye la VISTA

   require 'modelo.php';
   //En $libros hay un array con todos los libros gracias al MODELO
   //La VISTA recibe un array para mostrarlo por pantalla
   include 'vista.php';

   //toda la lógica se ha centralizado en el script del controlador, que solamente contiene código PHP y ningún tipo de HTML
?>