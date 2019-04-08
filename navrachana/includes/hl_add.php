<?php
include "mysql.php";
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO hl (hl_tit) VALUES (%s)', $_POST['hl_tit'])){
                        redirect('../admin/highlights.php');
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>