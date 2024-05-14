<!DOCTYPE html>
<html lang="es"> <!-- Agregar el atributo de idioma -->

<head>
    <meta charset="UTF-8">
    <title>Registro de Producto</title> <!-- Proporcionar un título significativo -->
    <link rel="stylesheet" href="estilo.css"> <!-- Cambiar la forma de enlace -->
</head>

<body>
    <header class="header">
        <?php require 'encabezado.php'; ?> <!-- Considera usar require_once -->
    </header>
    <section>
        <?php include 'capturaDatos.php'; ?> <!-- Verificar ruta correcta -->
        <form name="frmPrincipal" method="POST">
            <table border="1" width="600" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Descripción del Producto</td>
                    <td><input type="text" name="txtDescripcion" value="<?php echo htmlspecialchars(getDescripcion(), ENT_QUOTES, 'UTF-8'); ?>" size="60" /></td>
                </tr>
                <!-- Asegúrate de validar los valores antes de imprimir -->
                <tr>
                    <td>Stock</td>
                    <td><input type="text" name="txtStock" value="<?php echo htmlspecialchars(getStock(), ENT_QUOTES, 'UTF-8'); ?>" /></td>
                </tr>
                <tr>
                    <td>Precio del Producto</td>
                    <td><input type="text" name="txtPrecio" value="<?php echo htmlspecialchars(getPrecio(), ENT_QUOTES, 'UTF-8'); ?>" /></td>
                </tr>
                <tr class="botones"> <!-- Asegúrate de que esta fila tenga solo un contenedor con Flexbox -->
                    <td colspan="2"> <!-- Unimos celdas para permitir centrado total -->
                        <div class="button-container"> <!-- El contenedor para Flexbox -->
                            <input class="styled-submit" type="submit" name="btnListado" formaction="listarProductos.php" value="Ver listado de productos" />
                            <input class="styled-submit" type="submit" name="btnRegistrar" formaction="agregarProducto.php" value="Registrar producto" />
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php require 'pie.php'; ?>
    </footer>
</body>

</html>