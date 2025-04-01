<?php
include "model/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query(" SELECT * FROM users WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar usuario</title>
</head>
<body data-bs-theme="dark">
    <form class="col-4 p-3 m-auto bg-dark" method="POST">
        <h3 class="text-center alert alert-secondary">Modificar usuario</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
            include "controller/modificar_usuario.php";
            while($data = $sql->fetch_object()){?>
                <div class="mb-3">
                    <label for="username" class="form-label text-white">Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= $data -> username ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $data -> email ?>">
                </div>
                </div>
            <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>