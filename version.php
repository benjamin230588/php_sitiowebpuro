<?php
  
//Editar los parametros USUARIO y CONTRASEÑA con los de nuestro servidor
$mysql = mysqli_connect(
    'localhost',
    'id17398508_benjaminphp',
    '-Dwi2#f}1Ll@0hm{',
    'id17398508_pruebaphp'
  );
  
//Intentamos conectarnos al servidor
if (mysqli_connect_errno()) {
printf("Conexion fallida: %s\n", mysqli_connect_error());
exit();
}
  
//Mostramos en pantalla la versión de lservidor MySQL o MariaDB
printf("Version del servidor MySQL: %s\n", mysqli_get_server_info($mysql));
  
//Cerramos la conexion
mysqli_close($mysql);
?>