<?php $butt = mysql_safe_query('SELECT * FROM abt_scl');
if(!mysql_num_rows($butt)) {
    echo '';
} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo $achrow['abt'];
    }
}  
?>