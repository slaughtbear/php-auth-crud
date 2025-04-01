<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container-fluid row"> <!-- F O R M U L A R I O   D E   R E G I S T R O  -->
        <form class="col-4 p-3 bg-dark">
            <h3 class="text-center text-white">Registro de usuarios</h3>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-white">Correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label text-white">Confirmar contraseña</label>
                <input type="password" class="form-control" name="password2" id="password2">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-hover table-dark">
                <thead class="bg-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Correo electrónico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>