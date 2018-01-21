 
<?php
include "../includes/authorisation.php";
// post_delete.php
$ach_id = $_GET['ach_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM ach WHERE ach_id=%s LIMIT 1', $ach_id);
redirect($_SERVER['HTTP_REFERER']);
