<?php $butt = mysql_safe_query('SELECT * FROM ach ORDER BY ach_date DESC');
            if(!mysql_num_rows($butt)) {
                echo 'Uhm, there are no feathers to show right now...';
            } else {
                while($achrow = mysql_fetch_assoc($butt)) {
                    ?><div class="ach_col" style="background:url('img/ach_pics/<?php echo $achrow['ach_pic'];?>');background-size:cover;background-position:center;" onclick="window.location='achievements.php#<?php echo $achrow['ach_id'];?>';">
                    <?php
                    echo '<span class="ach_over">'.$achrow['ach_title']."</span>";
                    echo '</div>';
                }
                ?>
                <div class="more_butt" onclick="window.location='achievements.php';">See More</div>
                <?php
            }  
            ?>