 
<?php
include "../includes/authorisation.php";
// post_delete.php
$butt_id = $_GET['butt_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM home_buttons WHERE butt_id=%s LIMIT 1', $butt_id);
redirect($_SERVER['HTTP_REFERER']);
