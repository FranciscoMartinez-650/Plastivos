<?php
    session_start();
    include("../Conexion/cn.php");
    $nombre = $_POST['txtUsuario'];
    $password = $_POST['txtPassword'];
    $cmd = $conexion->prepare("select * from usuarios ".
    " where usuario=? and contrasena=?");
    $cmd->bind_param("ss",$nombre,$password);
    $cmd->execute();
    $cmd->store_result();
    $cmd->bind_result($Id,$usuario,$password);
    $cmd->fetch();
    if($cmd->num_rows > 0){
       $_SESSION['autenticado'] = true;
       $_SESSION['usuario'] = $nombre;
       $_SESSION['id_usuario'] = $Id;
       header("location: ../menu/menu.php");
    }
    else{
        //acción cuando es incorrecto
        header("location: Login.php?status=400");
    }


?>