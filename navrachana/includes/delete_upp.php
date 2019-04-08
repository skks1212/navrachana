 
<?php
include "../includes/authorisation.php";
// post_delete.php
$upp_id = $_GET['upp_id'];
include 'mysql.php';
mysql_safe_query('DELETE FROM upevents WHERE upp_id=%s LIMIT 1', $upp_id);
redirect($_SERVER['HTTP_REFERER']);
