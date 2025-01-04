/*<?php
@print "Hola {$argv[1]}\n"; 
?>
*/
<?php
$nombre = isset($argv[1]) ? $argv[1] : "Mundo"; 
@print "Hola, {$nombre}\n";
?>

