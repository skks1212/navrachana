<?php
include "mysql.php";
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO banner (ban_tit,ban_sub) VALUES (%s,%s)', $_POST['ban_tit'], $_POST['ban_sub'])){
                        redirect('../admin/banner.php');
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>