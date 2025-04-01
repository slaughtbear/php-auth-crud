<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["username"]) and !empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["password2"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = $conexion->query(" INSERT INTO users(username, email, password)values('$username','$email','$password') ");
        if($sql == 1){
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el usuario</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>