<?php
declare(strict_types=1);

require_once __DIR__ . '/src/classes/Validador.php';
require_once __DIR__ . '/src/classes/Generador.php';
require_once __DIR__ . '/src/classes/Calculadora.php';

$numeros = [];
$resultados = [];
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad = isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : 0;
    $minimo = isset($_POST['minimo']) ? (int)$_POST['minimo'] : 0;
    $maximo = isset($_POST['maximo']) ? (int)$_POST['maximo'] : 0;

    $validador = new Validador();

    if ($validador->validar($cantidad, $minimo, $maximo)) {
        $generador = new Generador();
        $numeros = $generador->generar($cantidad, $minimo, $maximo);

        $calculadora = new Calculadora();
        $calculadora->setNumeros($numeros);
        $resultados = $calculadora->getResultados();
    } else {
        $errores = $validador->getErrores();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Números</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Generador de Números</h2>

    <!-- ERRORES -->
    <?php if (!empty($errores)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errores as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- FORMULARIO -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Mínimo</label>
                        <input type="number" name="minimo" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Máximo</label>
                        <input type="number" name="maximo" class="form-control" required>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-primary">Generar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- RESULTADOS -->
    <?php if (!empty($numeros)): ?>

        <!-- Tabla de números -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Números Generados
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Número</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($numeros as $index => $num): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $num; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de resultados -->
        <div class="card">
            <div class="card-header bg-success text-white">
                Resultados Calculados
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Operación</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultados as $clave => $valor): ?>
                            <tr>
                                <td><?php echo ucfirst($clave); ?></td>
                                <td><?php echo $valor; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php endif; ?>

</div>

</body>
</html>