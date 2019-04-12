 
<?php
include "../includes/authorisation.php";
// post_delete.php
$hl_id = $_GET['hl_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM hl WHERE hl_id=%s LIMIT 1', $hl_id);
redirect($_SERVER['HTTP_REFERER']);
