<?
$servidor="198.101.136.226";
$usuario="816687_jnarvaez";
$clave="J4S2-9aa";
$db_nombre="816687_capreminfra";


$conex=@mysql_connect($servidor,$usuario,$clave) or die(mysql_error());
@mysql_select_db($db_nombre,$conex) or die(mysql_error()); 

if (!$conex){
	echo 'error al conectar';
	die;
}
$bd = mysql_select_db($db_nombre,$conex);
if (!$bd){
	echo 'error al seleccionar la base d datos';
	die;
}
mysql_query ("SET NAMES 'utf8'");
//echo $conex;


?>