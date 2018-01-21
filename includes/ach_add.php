<?php
include "mysql.php";
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO ach (ach_title,ach_body,ach_date) VALUES (%s,%s,%s)', $_POST['ach_title'], $_POST['ach_body'],time())){
                        redirect('../admin/achievements.php');
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>