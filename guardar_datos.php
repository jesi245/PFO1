<?php
// Verificar si llegaron los datos por POST
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validación básica
if (empty($usuario) || empty($contrasena)) {
    echo "Faltan datos obligatorios";
    exit;
}

// Validación específica (opcional)
if (strlen($usuario) < 3 || strlen($contrasena) < 6) {
    echo "El nombre de usuario debe tener al menos 3 caracteres y la contraseña 6";
    exit;
}

// Si pasa todas las validaciones 
echo "Datos recibidos correctamente";