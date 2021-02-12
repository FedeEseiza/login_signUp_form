<?php
    require 'functions.php';
    $cont = 0;
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['username'];
        $password = $_POST['password'];
        $conexion = conexion();
        $query = $conexion -> prepare('SELECT * FROM usuario WHERE username = :username');
        $query -> execute(array(
            ':username' => $usuario
        ));
        while($aux=$query->fetch(PDO::FETCH_ASSOC)){
            if (password_verify($password,$aux['password'])){
                session_start();
                $_SESSION['usuario'] = $usuario;
                $cont ++;
            }
        }
        $conexion=null;
        if ($cont > 0){
            header ('Location:'.RUTA.'/home.html');
        }else{
            $error .= '<li>El usuario o la contraseña no coinciden</li>';
        }
    }
    require 'index.php'
?>