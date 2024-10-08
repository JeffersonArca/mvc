<?php
/* Código relacionado con el acceso y descarga de los datos */
   $user = 'root';
   $password = '';
   $db = new PDO('mysql:host=localhost;dbname=books', $user, $password);
   $result = $db->query('SELECT titulo, precio FROM libros');
   $libros = array();
   while ($libro = $result->fetch())
      $libros[] = $libro;
?>