<?php $butt = mysql_safe_query('SELECT * FROM hl');
            if(!mysql_num_rows($butt)) {
                echo '';
            } else {
                while($achrow = mysql_fetch_assoc($butt)) {
                    ?><div class="hl_col" style="background:url('img/hl_pics/<?php echo $achrow['hl_pic'];?>');background-position:center;background-size:cover;">
                    <?php
                     echo '<span class="hl_over">'.$achrow['hl_tit']."</span>";
                     echo '</div><bR><br>';
                }
            }  
            ?>