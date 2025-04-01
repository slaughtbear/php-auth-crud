<?php
if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["username"]) and !empty($_POST["email"])){
        $id = $_POST["id"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $sql = $conexion->query(" UPDATE users SET username='$username', email='$email' WHERE id = '$id'");

        if($sql==1){
            header("location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar usuario</div>";
        }

    } else {
        // Campos vacioss
        echo "<div class='alert alert-warning'>Campos vacíos</div>";
    }
}
?>