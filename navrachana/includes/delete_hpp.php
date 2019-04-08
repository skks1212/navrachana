 
<?php
include "../includes/authorisation.php";
// post_delete.php
$hpp_id = $_GET['hpp_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM events WHERE hpp_id=%s LIMIT 1', $hpp_id);
redirect($_SERVER['HTTP_REFERER']);
