<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password' AND role = '$role'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Iniciar sesión
    echo "Inicio de sesión exitoso";
    // Redirigir a la página correspondiente
} else {
    if ($role == 'Alumno') {
        echo "NO HAY ALUMNO CON ESE NOMBRE Y APELLIDO";
    } else {
        echo "NO HAY PROFESOR CON ESE NOMBRE Y APELLIDO";
    }
}

$conn->close();
?>