<?php
include "conecta.php";
$vCveEsp=$_POST['cveEspecialidad'];
$vNomEsp=$_POST['nomEspecialidad'];
$vNomArea=$_POST['nombreArea'];
$vBoton=$_POST['boton'];
$resConectar=conecta();
$sqlArea="SELECT cveArea FROM AREA WHERE nomArea='$vNomArea';";
$sqlCveArea=mysql_query($sqlArea,$resConectar);
$resulCveArea=mysql_fetch_array($sqlCveArea);
$CveArea=$resulCveArea["cvArea"];

if($vBoton=="Guardar"){
$sqlAltaEsp="INSERT INTO ESPECIALIDAD
VALUES('$VCveEsp', '$vNomEsp', '$vCveArea');";
$guarda=mysql_query($sqlAltaEsp,$resConectar);
if(!$guarda){
echo "<SCRIPT LANGUAJE='Javascript' TYPE='text/Javascript'>
    alert('Ocurrio un error...Posible clave repetida')
    Javascript:history.back(1)
        </SCRIPT>";
}
else{
    echo"<SCRIPT LANGUAJE='Javascript' TYPE='text/Javascript'> 
    alert('Especialidad registrada')
    window.location='../index.html'
        </SCRIPT>"
}
}
else{
    $sqlModEsp="UPDATE ESPECIALIDAD
    SET nomEsp='$vNomEsp',cveArea='$vCveArea'
    WHERE cveEsp='$CveEsp';";
    $modificar=mysql_query($sqlModEsp,$resConectar);
    if($modificar){
        echo"<SCRIPT LANGUAJE='Javascript' TYPE='text/Javascript'>
        alert('ocurrio un error...No se guardo el registro')
        Javascript:history.back(1)
        </SCRIPT>"
    }
    else{
        echo "<SCRIPT LANGUAJE='Javascript'TYPE='text/Javascript'>
        alert ('Especilalidad modificada')
        window.location='consultasEspecialidad.php,
        </SCRIPT>";
    }
    
}












