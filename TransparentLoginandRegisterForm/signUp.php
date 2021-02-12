<?php 
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $pass_encrypt = password_hash($_POST['password'], PASSWORD_DEFAULT,array("cost"=>10));
 //   $date = $_POST['date'];
    $conexion = conexion();
    $error = '';
    if (empty($usuario) or empty($name) or empty($surname) or empty($password) or empty($password2)){
        $error .= '<li>Por favor rellena todos los campos</li>';
    }else{
        $validation = comprobarUsuario($conexion,$usuario);
        if ($validation != false){
            $error .= '<li>El nombre de usuario ya existe</li>';
        } 
        if ($password != $password2){
            $error .= '<li>Las contraseñas no coinciden</li>';
        }
    }
    if ($error == ''){
        $query = $conexion -> prepare('INSERT INTO usuario(id,username,name,surname,password) VALUES(NULL,:username,:name,:surname,:password)');
        $result = $query -> execute(array(
            ':username' => $usuario,
            ':name' => $name,
            ':surname' => $surname,
            ':password' => $pass_encrypt
        ));
        $conexion = null;
        header('Location:'.RUTA.'/index.php');
    }
    
}
require 'signUpView.php'
?>