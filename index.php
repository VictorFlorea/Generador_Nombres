<div style="margin:10px"><center><a href="index.php">Generar otro nombre</a><center></div>
<?php
if(isset($_POST['nombre'])){
	$p=$_POST['nombre'];
}
else{
	include 'nhombre.php';
	$p=$nhombre[rand(1,count($nhombre))-1];
}
$nhombre= explode("\n", file_get_contents('nhombre.php'));
$nmujer= explode("\n", file_get_contents('nmujer.php'));
$apellidos= explode("\n", file_get_contents('apellidos.php'));

shuffle($nhombre);
shuffle($nmujer);
shuffle($apellidos);

for ($i = 0; $i <= 10; $i++) {
    echo $nhombre[$i] . ' ' . $apellidos[$i] . "<br />\n";
    echo $nmujer[$i] . ' ' . $apellidos[$i] . "<br />\n";

	(&$nhombre, &$nmujer, &$apellidos){
		$nhombreAleatorio = $nhombre[ mt_rand(0, count($nhombre) -1) ];
		$nmujerAleatorio = $nmujer[ mt_rand(0, count($nmujer) -1) ];
		$apellidoAleatorio = $apellidos[ mt_rand(0, count($apellidos) -1) ];
		$otroapeliidoAleatorio = $apellidos[ mt_rand(0, count($apelldos) -1 ];
		return "$nhombreAleatorio $nmujerAleatorio $apellidoAleatorio $otroapeliidoAleatorio";
}