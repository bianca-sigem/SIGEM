<?php
session_start();
include("conexion.php");

// Por si tu conexion usa $conexion en vez de $conn
if (!isset($conn) && isset($conexion)) { $conn = $conexion; }

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Usamos nombre_usuario y password como tenés vos
    $sql = "SELECT * FROM usuario WHERE nombre_usuario = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) {
        $fila = $result->fetch_assoc();
        
        // Verifica el hash
        if (password_verify($clave, $fila['password'])) {
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['usuario'] = $fila['nombre_usuario'];
            $_SESSION['nombre'] = $fila['nombre'];
            
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: login.php?error=clave");
            exit();
        }
    } else {
        header("Location: login.php?error=usuario");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>