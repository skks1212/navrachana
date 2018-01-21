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
    .alert{
        padding:20px;
        width:200px;
        right:20px;
        bottom:20px;
        position:fixed;
        background:Green;
        color:white;
    }
    </style>
    <div class="lay">
<h1>
    Page Maker
</h1>
<?php
$getter = $_GET['name'];
        if(!empty($_POST)) {
        $tit = $_POST['pg_tit'];
        $cont = $_POST['pg_cont'];
        $name = $_POST['pg_name'];
        $myfile = fopen("../xml/".$getter.".xml", "w") or die("Unable to open file!");
        $txtxml = "
        <data>
        <title>".htmlspecialchars($name)."</title>
        <pgtitle>".htmlspecialchars($tit)."</pgtitle>
        <content>".nl2br(htmlspecialchars($cont))."</content>
        </data>
        ";
        fwrite($myfile, $txtxml);
        fclose($myfile);
        echo '<div class="alert">Changes saved Successfuly</div>';     
    }
?>
<?php
        $xml = simplexml_load_file("../xml/".$getter.".xml");
        $title = $xml->title;
        $pgtitle = $xml->pgtitle;
        $content = $xml->content;
        ?>
<form method="post">
    <label for="pg_name">Page Name (will be displayed in the browser tab)</label><br>
    <input name="pg_name" value="<?php echo $title; ?>"><br>
    <label for="pg_fl">Page File (Name of the file. Please dont use spaces and special chars)</label><br>
    <input name="pg_fl" value="<?php echo $getter; ?>" required><br>
    <label for="pg_tit">Page Title (Will be displayed on page)</label><br>
    <input name="pg_tit" value="<?php echo $pgtitle; ?>"><br>
    <label for="pg_cont">Page Content (Markup Language)</label><br>
    <textarea name="pg_cont"><?php echo $content; ?></textarea><br>
    <input type="submit">
</form>