<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Aureum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="bg-dark">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Registro</h2>

            <form action="process_registration.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nuevoNombre" class="form-label">Nombre</label>
                <input type="text" name="nuevoNombre" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="nuevoUsuario" class="form-label">Usuario</label>
                <input type="text" name="nuevoUsuario" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="nuevoPassword" class="form-label">Contraseña</label>
                <input type="password" name="nuevoPassword" class="form-control" required>
              </div>

              <button class="btn btn-danger" type="submit" name="submit">Registrarse</button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>