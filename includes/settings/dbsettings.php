<?php
/*
Database Connection settings will be defined  hare
*/

define('SPHOST','localhost');
define('SPUSER','root');
define('SPPASS','');
define('SPDB','navrachana');

$sp=new mysqli(SPHOST,SPUSER,SPPASS,SPDB);

if($sp->connect_errno){
	echo "Check Host Connection<br/>";
}
?>
