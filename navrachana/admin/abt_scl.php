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
        width:80%;
    }
    #uvon #headtd td{
        background:#ff5e00;
        color:white;

    }
    </style>
    <div class="lay">
<h1>
    About School
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Content
        </td>
        <td>
            Edit
</td>
</tR>
<tr>
<?php
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO abt_scl (abt) VALUES (%s)', $_POST['abt'])){
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>
<?php
$butt = mysql_safe_query('SELECT * FROM abt_scl');
if(!mysql_num_rows($butt)) {
    echo '<tr><td>Alert: You have not added any content!<td></tr>
    <tr>
    <form method="Post">       
        <td >
        <textarea name="abt" placeholder="Add content"></textarea>
</td>
    <td>
    <input type="submit">
            </form>
</td>
</tr>';

} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '<tr><td>'.$achrow['abt'].'</td>';
        echo'<td style="width:20%;"><a href="../includes/delete_abt.php?abt_id='.$achrow['abt_id'].'">Delete</a></td></tr>';
    }
}
    ?>

</table>
    