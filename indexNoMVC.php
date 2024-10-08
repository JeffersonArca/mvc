<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
</head>
<body>
    <h1>Librería</h1>
    <table>
    <tr>
      <th>TITULO</th>
      <th>PRECIO</th>
    </tr>
    <!-- HASTA AQUÍ LA VISTA ->

    <?php
        $user = 'root';
        $password = '';
        $db = new PDO('mysql:host=localhost;dbname=books', $user, $password);
        $result = $db->query('SELECT titulo, precio FROM libros');
        while ($libro = $result->fetch())
    {
     ?>
    <!- HASTA AQUÍ EL MODELO -->

    <!-- DESDE AQUÍ HASTA EL FINAL, EL OTRO MODELO -->
     <tr>
      <td><?php echo $libro['titulo']?></td>
      <td><?php echo number_format($libro['precio'],2)?></td>
     </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>
