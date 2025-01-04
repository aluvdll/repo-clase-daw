//cambio realiado por Vicente devesaO
/*<?php
@print "Hola {$argv[1]}\n"; 
?>
*/
<?php
//he comentado la anterior actividad escribiendo aquí abajo la nueva
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo"; 
@print "Hola, {$nombre}\n";
?>

