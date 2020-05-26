<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    
    <center><h2>REGISTRO DE DATOS</h2></center>

<br>

	
    
    
    
    <div class="tabla">
    <table border="5" align="center" bgcolor="white" width="70%">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Duda</th>
        
        </tr>
    
    
    
    <?php
    
    $consulta="SELECT * FROM formulario";
    $ejecutarConsulta=mysqli_query($enlace,$consulta);
    $verfilas=mysqli_num_rows($ejecutarConsulta);
    $fila = mysqli_fetch_array($ejecutarConsulta);
    
    
    if(!$ejecutarConsulta){
        echo"Error en la consulta";
    }else{
        if($verfilas<1){
            echo"<tr><td>Sin registro</td></tr>";
        }else{
            for($i=0;$i<=$fila;$i++){
                echo'
                    <tr>
                    <td>'.$fila[0].'</td>
                     <td>'.$fila[1].'</td>
                     <td>'.$fila[2].'</td>
                     </tr>
                     ';
                 $fila = mysqli_fetch_array($ejecutarConsulta);
    
            }
        }
        
    }
    
    ?>
        </table>
    </div>
    
    
    

</body>
</html>
