<?php 
//cuando trabajas en Local debes usar este
define('DB_SERVER','198.101.136.226'); 
//cuando trabajas en servidor de producción debes usar este
//define('DB_SERVER','mysql51-017.wc1'); 
/*define('DB_NAME','816687_capreminfra');
define('DB_USER','816687_cprem');
define('DB_PASS','Ap_l$79_');
*/

define('DB_NAME','816687_capreminfra');
define('DB_USER','816687_jnarvaez');
define('DB_PASS','J4S2-9aa');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_set_charset('utf8');
mysql_select_db(DB_NAME,$con); 
?>
