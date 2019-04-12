<?php $butt = mysql_safe_query('SELECT * FROM home_buttons');
            if(!mysql_num_rows($butt)) {
                echo '';
            } else {
                while($achrow = mysql_fetch_assoc($butt)) {
                    ?><div class="butt_on" onclick="window.location='<?php echo $achrow['butt_loc'];?>';">
                    <?php
                    echo $achrow['butt_tit'].'</div>';
                }
                echo '<br><BR>';
            }  
            ?>