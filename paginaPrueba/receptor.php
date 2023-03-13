<?php

include("conexion.php");

if($conex){
    echo "Conexión exitosa";
}else{
    echo "Error al conectarse";
}



if(isset($_POST["enviar"])){
    $nombre = $_POST['name'];
    $corre = $_POST['correo'];
    $pass = $_POST['pass'];
    $consulta = "INSERT INTO persona(nombre, correo, contrasena) VALUES ('$nombre','$corre','$pass')";
    $resulado = mysqli_query($conex,$consulta);
    if($resulado){
        ?>

        <div>
            <h2>Registro Correcto!.</h2>
        </div>

        <?php
    }else{
        ?>

        <div>
            <h2>Registro Incorrecto!.</h2>
        </div>

        <?php
    }
}






?>