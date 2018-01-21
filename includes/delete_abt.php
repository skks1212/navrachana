 
<?php
include "../includes/authorisation.php";
// post_delete.php
$abt_id = $_GET['abt_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM abt_scl WHERE abt_id=%s LIMIT 1', $abt_id);
redirect($_SERVER['HTTP_REFERER']);
