<html>
 <head>
   <title>LIBRERIA ULEAM</title>
 </head>
 <body>

  <h1>Libros dados de alta en la libreria</h1>
  <h1>Código que muestra la visualización de los libros</h1>

  <table>
   <tr>
    <th>TITULO</th>
    <th>PRECIO</th>
   </tr>
   <?php foreach ($libros as $libro): ?>
    <tr>
      <td><?php echo $libro['titulo']?></td>
      <td><?php echo number_format($libro['precio'],2)?></td>
    </tr>
  <?php endforeach; ?>
  </table>

</body>
</html>