<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../Layout/estilos.php");
    ?>
    <link rel="stylesheet" href="../estilos/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plasticos</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Inicio de sesión </h2>
          
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="https://png.pngtree.com/png-vector/20191003/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form action="validarSesion.php" method="post">
            <input type="text" id="txtUsuario" class="fadeIn second" name="txtUsuario" placeholder="usuario">
            <input type="text" id="txtPassword" class="fadeIn third" name="txtPassword" placeholder="contraseña">
            <input href="../menu/menu.php" type="submit" class="fadeIn fourth" value="Entrar">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">recuperar contraseña /</a>
            <a class="underlineHover" href="#">registrarse</a>
          </div>
      
        </div>
      </div>
      <?php
        include("../Layout/scripts.php");
        if(isset($_GET["status"])){
            $status = $_GET['status'];  
            echo "<script type='text/javascript' >";
            if($status == 400){
                echo "swal('Cuidado','Usuario y/o contraseña incorrectas','warning');";
            }   
            if($status == 500){
                echo "swal('Cuidado','Error de sesión','error');";
            }    
            echo "</script>"; 
        }
        
    ?>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
</body>
</html>