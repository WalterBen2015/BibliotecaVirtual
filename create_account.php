<?php
include 'db.php';

$role = $_POST['role'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$celular = $_POST['celular'];

if ($role == 'Alumno') {
    $ano = $_POST['ano'];
    $sql = "SELECT * FROM alumnos WHERE dni = '$dni'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "YA EXISTE UN ALUMNO CON ESTE DNI";
    } else {
        $sql = "INSERT INTO alumnos (nombre, dni, ano, email, celular) VALUES ('$nombre', '$dni', '$ano', '$email', '$celular')";
        if ($conn->query($sql) === TRUE) {
            echo "Cuenta de alumno creada con éxito";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else if ($role == 'Profesor') {
    $materia = $_POST['materia'];
    $email = $email . '@' . $_POST['email_domain'];
    $sql = "SELECT * FROM profesores WHERE dni = '$dni'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "YA EXISTE UN USUARIO CON ESE DNI";
    } else {
        $sql = "INSERT INTO profesores (nombre, dni, materia, email, celular) VALUES ('$nombre', '$dni', '$materia', '$email', '$celular')";
        if ($conn->query($sql) === TRUE) {
            echo "Cuenta de profesor creada con éxito";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>