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
    </style>
    <div class="lay">
<h1>
    Buttons
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Button
        </td>
        <td>
            Location
        </td>
        <td>
            Edit
</td>
</tR>
<tr>
<?php
$butt = mysql_safe_query('SELECT * FROM home_buttons');
if(!mysql_num_rows($butt)) {
    echo 'Alert: You have not added any buttons!';
} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '<tr><td>'.$achrow['butt_tit'].'</td>';
        echo '<td>'.$achrow['butt_loc'].'</td>';
        echo'<td style="width:20%;"><a href="../includes/delete_button.php?butt_id='.$achrow['butt_id'].'">Delete</a></td></tr>';
    }
}
    ?>
    <?php
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO home_buttons (butt_tit,butt_loc) VALUES (%s,%s)', $_POST['butt_tit'], $_POST['butt_loc'])){
                        redirect('buttons.php');
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>
    </tr><tr>
    <form method="Post">
                
                
         
        <td >
        <input name="butt_tit" placeholder="Add button text">
</td>
<td >
<input name="butt_loc" placeholder="Add button location">
</td>

    <td style="width:20%;">
    <input type="submit">
            </form>
</td>
</tr>
