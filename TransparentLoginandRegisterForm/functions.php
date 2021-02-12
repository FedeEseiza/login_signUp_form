<?php
    define('RUTA','http://localhost/TransparentLoginandRegisterForm');
    function conexion(){
        try {
            $conexion=new PDO('mysql:host=localhost;dbname=loginprueba', 'root','');
            return $conexion;
        }catch (PDOExeption $e){
            return false;
        }
    }
    function comprobarUsuario($conexion,$user){
        $query = $conexion -> prepare('SELECT * FROM usuario WHERE username = :username LIMIT 1');
        $query -> execute(array(
            ':username' => $user
        ));
        $result = $query -> fetch();
        return $result;
    }
?>