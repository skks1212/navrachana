 
<?php
include "../includes/authorisation.php";
// post_delete.php
$ban_id = $_GET['ban_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM banner WHERE ban_id=%s LIMIT 1', $ban_id);
redirect($_SERVER['HTTP_REFERER']);
