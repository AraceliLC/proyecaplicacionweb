<?php
function conecta(){
//Conexion a la base de datos
$vServidor="localhost";
$vUsuarioBD="root";
$vContraseniaBD="";
$vBD="escuela";
$errorServ="No se puede conectar con el servidor";
$errorBD="No se puede seleccionar la base de datos";
//conexion al servidor local
$conexion=mysql_connect($vServidor,$vUsuarioBD,
        $vContraseniaBD) or die($errorServ);
//seleccionar la base de datos 
$vBD=mysql_select_db($vBD)or die($errorBD);
//retorno de la coneccion 
return($conexion);
}
?>
