<?php
session_start();

// Validaciones básicas para datos POST
if (isset($_POST['txtDescripcion']) && isset($_POST['txtStock']) && isset($_POST['txtPrecio'])) {
    if (!isset($_SESSION['misProductos'])) {
        $_SESSION['misProductos'] = []; // Inicializa si no existe
    }

    // Valida y limpia datos antes de guardarlos
    $descripcion = htmlspecialchars($_POST['txtDescripcion'], ENT_QUOTES, 'UTF-8');
    $stock = intval($_POST['txtStock']);
    $precio = floatval($_POST['txtPrecio']);

    $_SESSION['misProductos'][$descripcion] = [
        'descripción' => $descripcion,
        'stock' => $stock,
        'precio' => $precio,
    ];

    // Redirección a listadoProductos.php
    header('Location: listarProductos.php');
    exit; // Siempre llama a exit después de una redirección
} else {
    // Si falta algún dato, muestra un mensaje o redirige a un error
    echo "Faltan datos necesarios para agregar el producto.";
}
