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
    Banner
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Banner Title
        </td>
        <td>
            Banner subtitle
        </td>
        <td>
            Banner background
        </td>
        <td>
            edit
        </td>
</tR>
<tr>
<?php
        $user='banner';
           $output_dir = "../img/banner/";
       $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
       $extension = @end(explode(".", $_FILES["myfile"]["name"]));
           ?>

<?php
$butt = mysql_safe_query('SELECT * FROM banner');
if(!mysql_num_rows($butt)) {
    echo '<tr><td colspan="3">Alert: You have not added any banners!<td></tr>
    <tr>
    <form method="Post" action="../includes/ban_up.php">       
        <td >
        <input name="ban_tit" placeholder="Add banner title">
</td>
<td >
<input name="ban_sub" placeholder="Add banner subtitle">
</td>
<td >
<em>Banner bg will be added later</em>
</td>

    <td style="width:20%;">
    <input type="submit">
            </form>
</td>
</tr>';

} else {
    ?>
    <?php
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
        
        
        $update="update banner set ban_bg='$url'";
        
        if($sp->query($update)){
           echo '<div class="alert">';
              echo  '<b>Success !</b>  Image Updated' ;
              echo  '';
              redirect('banner.php');
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
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '<tr><td>'.$achrow['ban_tit'].'</td>';
        echo '<td>'.$achrow['ban_sub'].'</td>';
        if(!empty($achrow['ban_bg'])) {
            echo '<td><img src="../img/banner/'.$achrow['ban_bg'].'" width="100%"></td>';
        }
        else{
            echo '<td><form  method="post" enctype="multipart/form-data">
            <input class=filer type="file" name="myfile"  required/><button type="submit" name="upload" class="submitter">Upload</button>
            </form></td>';
        }
        echo'<td style="width:20%;"><a href="../includes/delete_banner.php?ban_id='.$achrow['ban_id'].'">Delete</a></td></tr>';
    }
}
    ?>
    
    </tr>
