<?php
    $user = 'root';
    $password = '';
    $db = new PDO('mysql:host=localhost;dbname=books', $user, $password);
    $result = $db->query('SELECT titulo, precio FROM libros');
    $libros = array();
    while ($libro = $result->fetch())
    {
        $libros[] = $libro;
    }
?> <!-- Hasta aquí el modelo, arquitectura MVC, primero se obtiene los datos del MODELO para luego pasarlos a la VISTA-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Libros dados de alta en la libreria</h1>
        <table border="1">
            <tr>
                <th>TITULO</th>
                <th>PRECIO</th>
            </tr>
            <?php foreach ($libros as $libro): ?>
                <tr>
                <td><?php echo $libro['titulo'] ?></td>
                <td><?php echo number_format($libro['precio'],2) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body> <!-- Hasta aquí la vista -->
</html>