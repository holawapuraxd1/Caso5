<?php
function getDescripcion() {
    return isset($_POST['txtDescripcion']) ? htmlspecialchars($_POST['txtDescripcion'], ENT_QUOTES, 'UTF-8') : '';
}

function getStock() {
    return isset($_POST['txtStock']) ? intval($_POST['txtStock']) : 0;
}

function getPrecio() {
    return isset($_POST['txtPrecio']) ? floatval($_POST['txtPrecio']) : 0;
}
