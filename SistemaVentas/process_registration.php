<?php

include_once('usuarios.controlador.php');
include_once('usuarios.modelo.php');

// Check if the registration form is submitted
if(isset($_POST["submit"])) {

    // Get form data
    $nombre = $_POST["nuevoNombre"];
    $usuario = $_POST["nuevoUsuario"];
    $password = $_POST["nuevoPassword"];
    $perfil = $_POST["nuevoPerfil"];

    // Hash the password
    $encriptar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

    // Upload profile picture (you may want to add additional checks and validations)
    $ruta = "";

    if(isset($_FILES["nuevaFoto"]["tmp_name"])) {
        // Handle file upload and set $ruta accordingly
        // ...

        // For example:
        // $ruta = "path/to/uploaded/file.jpg";
    }

    // Store user information in the database
    $tabla = "usuarios";
    $datos = array(
        "nombre" => $nombre,
        "usuario" => $usuario,
        "password" => $encriptar,
        "perfil" => 'A verificar',
        "foto" => $ruta
    );

    // Call the model method to insert user into the database
    $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

    if($respuesta == "ok"){
        // Registration successful
        echo '<script>
                alert("Su registro queda a verificar por un administrador.");
                window.location = "index.php";
              </script>';
    } else {
        // Registration failed
        echo '<script>
                alert("Registro fallido, por favor intentelo de nuevo");
                window.location = "registration_form.php";
              </script>';
    }
}

?>