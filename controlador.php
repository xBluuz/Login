<?php
include("./conexion_bd.php");

if (!empty($_POST['aceptar'])) {
    if (empty($_POST['usuario']) and empty($_POST['contraseña'])) {
       echo "Los Campos estas vacios"; 
    } else{
        $usuario = $_POST["usuario"];
        $contraseña = hash("sha256",$_POST["contraseña"]);
        $sql = $conexion->query("SELECT * FROM login1 WHERE user='$usuario' AND password='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            setcookie('login', "True", time()+ 0*24*60*60,'/');  
            
            header("Location: prueba.php");
        } else {
            echo "<div class='alerta1'>Aceso Denegado</div>";
        }
    }
        
}
?>