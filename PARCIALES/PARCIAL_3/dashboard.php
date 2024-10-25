<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];

    if (!empty($titulo) && strtotime($fecha) > time()) {
        $_SESSION['tareas'][] = ['titulo' => $titulo, 'fecha' => $fecha];
    } else {
        $error = "Datos inválidos. Asegúrate de que los campos están completos y la fecha es válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
    <a href="logout.php">Cerrar Sesión</a>

    <h3>Tareas</h3>
    <ul>
        <?php foreach ($_SESSION['tareas'] as $tarea): ?>
            <li><?php echo $tarea['titulo'] . " - " . $tarea['fecha']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Agregar Nueva Tarea</h3>
    <form method="POST" action="">
        <input type="text" name="titulo" placeholder="Título de la tarea" required><br>
        <input type="date" name="fecha" required><br>
        <button type="submit">Agregar Tarea</button>
    </form>

    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</body>
</html>
