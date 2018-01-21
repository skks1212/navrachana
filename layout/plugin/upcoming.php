<?php $butt = mysql_safe_query('SELECT * FROM upevents');
            if(!mysql_num_rows($butt)) {
                echo '';
            } else {
                while($achrow = mysql_fetch_assoc($butt)) {
                    echo '<span style="color:#ff5e00;">'.$achrow['upp'].'</span><br><br>';
                }
            }  
            ?>