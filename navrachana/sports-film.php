<?php
        include "layout/css/core.php";
        include "layout/header.php";
        include "layout/menu.php";
        include "includes/mysql.php";
        $filename = basename(__FILE__, ".php"); 
        ?>
        <?php
        $xml = simplexml_load_file("xml/".$filename.".xml");
        $title = $xml->title;
        $pgtitle = $xml->pgtitle;
        $content = $xml->content;
        ?>
        <title><?php echo $title;?> | Navrachana School Sama</title>
        <div class="page">
        <?php
        include "layout/banner.php";
        ?>
        <center>
        <div class="layout">
        <span class="heading"><?php echo $pgtitle;?></span><br><BR>
        <p><?php echo $content;?></p>
        </div>
        </div>  
        <?php
        include 'layout/footer.php';
        ?>