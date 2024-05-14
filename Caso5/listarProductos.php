<?php
session_start();

$productos = isset($_SESSION['misProductos']) ? $_SESSION['misProductos'] : [];
?>
<!DOCTYPE html>
<html lang="es"> <!-- Atributo de idioma -->
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title> <!-- Título descriptivo -->
    <link rel="stylesheet" href="estilo.css"> <!-- Cambio de enlace CSS -->
</head>
<body>
    <header class="header">
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <table border="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <th>Descripción del Producto</th>
                <th>Stock</th>
                <th>Precio</th>
            </tr>
            <?php if ($productos): ?>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($producto['descripción'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo intval($producto['stock']); ?></td>
                        <td><?php echo '$' . number_format(floatval($producto['precio']), 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" style="text-align: center;">No hay productos en la canasta..!!!</td>
                </tr>
            <?php endif; ?>
        </table>
    </section>
    <footer>
        <p id="centrado">
            <a href="index.php">Seguir comprando..!!</a> |
            <a href="destruir.php">Cerrar sesión</a>
        </p>
        <?php include 'pie.php'; ?>
    </footer>
</body>
</html>
