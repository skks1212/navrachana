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
        width:30%;
    }
    #uvon #headtd td{
        background:#ff5e00;
        color:white;

    }
    </style>
    <div class="lay">
<h1>
    Achievements
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Achievement Title
        </td>
        <td>
            Achievement Body
        </td>
        <td style="width:100px;">
            Achievement Date
        </td>
        <td>
            Achievement Picture
        </td>
        <td>
            edit
        </td>
</tR>
<tr>
<?php

           $output_dir = "../img/ach_pics/";
       $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
       $extension = @end(explode(".", $_FILES["myfile"]["name"]));
           ?>

<?php
$butt = mysql_safe_query('SELECT * FROM ach');
if(!mysql_num_rows($butt)) {
    echo '<tr><td colspan="4">Alert: You have not added any achievements!<td></tr>
    ';

} else {
    ?>
    <?php
        while($achrow = mysql_fetch_assoc($butt)) {
            $user=$achrow['ach_id'];


        echo '<tr><td>'.$achrow['ach_title'].'</td>';
        echo '<td>'.nl2br($achrow['ach_body']).'</td>';
        echo '<td>'.date('F j<\s\up>S</\s\up>, Y', $achrow['ach_date']).'</td>';
        if(!empty($achrow['ach_pic'])) {
            echo '<td><img src="../img/ach_pics/'.$achrow['ach_pic'].'" width="100%"></td>';
        }
        else{
            if(!empty($_POST)) {
    
                //Filter the file types , if you want.
                if ((($_FILES["myfile"]["type"] == "image/gif")
                || ($_FILES["myfile"]["type"] == "image/jpeg")
                || ($_FILES["myfile"]["type"] == "image/JPG")
                || ($_FILES["myfile"]["type"] == "image/png")
                || ($_FILES["myfile"]["type"] == "image/pjpeg"))
                && ($_FILES["myfile"]["size"] < 504800)
                && in_array($extension, $allowedExts)) 
            {
                  if ($_FILES["myfile"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
                    }
                if (file_exists($output_dir. $_FILES["myfile"]["name"]))
                  {
                  unlink($output_dir. $_FILES["myfile"]["name"]);
                  }	
                    else
                    {
                    $pic=$_FILES["myfile"]["name"];
                    $conv=explode(".",$pic);
                    $ext=$conv['1'];	
                        
                    //move the uploaded file to uploads folder;
                      move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$user.".".$ext);
                    
                    $pics=$output_dir.$user.".".$ext;
                  
                      
                    $url=$user.".".$ext;
                    
                    $id = $achrow['ach_id'];
                    $update="update ach set ach_pic='$url' where ach_id='$id'";
                    
                    if($sp->query($update)){
                       echo '<div class="alert">';
                          echo  '<b>Success !</b>  Image Updated' ;
                          echo  '';
                          redirect('achievements.php');
                        echo '</div>';
                    }
                    else{
                        echo '<div class="alert">';
                          echo  '<b>Error !</b> ' .$sp->error ;
                          echo  '';
                        echo '</div>';
                    }
                    
                    
                    
                    }
                    
            }	
            else{
            
               echo '<div data-alert class="alert-box warning radius">';
                echo  '<b>Warning !</b>  File not Uploaded, Check image' ;
                echo  '';
            echo '</div>';
            
            }
            }
            echo '<td><form  method="post" enctype="multipart/form-data">
            <input class=filer type="file" name="myfile"  required/><button type="submit" name="upload" class="submitter">Upload</button>
            </form></td>';
        }
        echo'<td style="width:20%;"><a href="../includes/delete_ach.php?ach_id='.$achrow['ach_id'].'">Delete</a></td></tr>';
    }
}
    ?>
    <tr>
    <form method="Post" action="../includes/ach_add.php">       
        <td style="width:100px;">
        <input name="ach_title" placeholder="Add Achievement title">
</td>
<td >
<textarea name="ach_body" placeholder="Add Achievement body"></textarea>
</td>
<td >
<em>Current Date</em>
</td>
<td >
<em>Achievement picture will be added later</em>
</td>

    <td style="width:50px;">
    <input type="submit">
            </form>
</td>
</tr>
