<?php
function incremento_contador($archivo,$log)
{
// $archivo contiene el numero que actualizamos
$contador = 0;

//Abrimos el archivo y leemos su contenido
$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp);

//Incrementamos el contador
++$contador;

//Actualizamos el archivo con el nuevo valor
$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp); 


$fpp = fopen($log,"a");
$correo = $_GET['email']."\n";
fwrite($fpp, "\n Nombre: $correo");
fclose($fpp);


//echo "Este script ha sido ejecutado $contador veces"; 
}
incremento_contador('contador.txt','log.txt');

header("Content-type: image/png");
  $img = imagecreatefrompng("img/firma.png");
  imagepng($img);
  imagedestroy($img);
?>