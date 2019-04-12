<?php
include "../includes/mysql.php";
include "../includes/authorisation.php";
include "layout/header.php";
include "layout/menu.php";
?>
<style>
    .lay{
        margin-left:20%;
        width:60%;
        margin-top: 67px;
    }
    #uvon table{
        width:100%;
        background: orange;
    }
    #uvon td{
        padding:20px;
        text-align:center;
        width:40%;
    }
    #uvon #headtd td{
        background:#ff5e00;
        color:white;
    }
    input{
        padding:20px;
        width:100%;
        margin: 20px 0;
        font-size: 20px;
    }
    textarea{
        padding:20px;
        min-width:100%;
        max-width:100%;
        margin: 20px 0;
        font-size: 20px;
        min-height: 300px;
    }
    </style>
    <div class="lay">
<h1>
    Page Maker
</h1>
<?php
    if(!empty($_POST)) {
        $file = $_POST['pg_fl'];
        $tit = $_POST['pg_tit'];
        $cont = $_POST['pg_cont'];
        $name = $_POST['pg_name'];
        $myfile = fopen("../xml/".$file.".xml", "w") or die("Unable to open file!");
        $myfilephp = fopen("../".$file.".php", "w") or die("Unable to open file!");
        $txt = '<?php
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
        <?php echo $content;?>
        </div>
        </div>
        <?php
        include "layout/footer.php";
        ?>  
        ';
        $txtxml = "
        <data>
        <title>".htmlspecialchars($name)."</title>
        <pgtitle>".htmlspecialchars($tit)."</pgtitle>
        <content>".nl2br(htmlspecialchars($cont))."</content>
        </data>
        ";
        fwrite($myfile, $txtxml);
        fwrite($myfilephp, $txt);
        fclose($myfilephp);
        fclose($myfile);     
    }
?>
<form method="post">
    <label for="pg_name">Page Name (will be displayed in the browser tab)</label><br>
    <input name="pg_name"><br>
    <label for="pg_fl">Page File (Name of the file. Please dont use spaces and special chars)</label><br>
    <input name="pg_fl" required><br>
    <label for="pg_tit">Page Title (Will be displayed on page)</label><br>
    <input name="pg_tit"><br>
    <label for="pg_cont">Page Content (Markup Language)</label><br>
    <textarea name="pg_cont"></textarea><br>
    <input type="submit">
</form>