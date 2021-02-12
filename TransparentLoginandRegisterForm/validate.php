<?php
    require 'functions.php';
    $usuario = $_POST['username'];
    $password = $_POST['password'];    
    $conexion = conexion();
    session_start();
    $_SESSION['usuario'] = $usuario;
    $conexion = mysqli_connect("localhost","root","","loginprueba");
    $query = "SELECT * FROM usuario WHERE username = '$usuario' AND password = '$password'";
    $result = mysqli_query($conexion,$query);
    $filas = mysqli_num_rows($result);
    if ($filas){
        header('Location:'.RUTA.'/home.html');
    }else{
        header('Location:'.RUTA.'/index.html');
    }
        
        
?>