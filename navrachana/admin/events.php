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
    Happenings
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Event
        </td>
        <td>
            Edit
</td>
</tR>
<tr>
<?php
$butt = mysql_safe_query('SELECT * FROM events');
if(!mysql_num_rows($butt)) {
    echo '<tr><td>Alert: You have not added any events!</td></tr>';
} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '<tr><td>'.$achrow['hpp'].'</td>';
        echo'<td style="width:20%;"><a href="../includes/delete_hpp.php?hpp_id='.$achrow['hpp_id'].'">Delete</a></td></tr>';
    }
}
    ?>
    <?php
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO events (hpp) VALUES (%s)', $_POST['hpp'])){
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>
    </tr><tr>
    <form method="Post">
<td >
<input name="hpp" placeholder="Add Event">
</td>

    <td style="width:20%;">
    <input type="submit">
            </form>
</td>
</tr>
            </table>
<br><BR>
<h1>
    Upcoming
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Event
        </td>
        <td>
            Edit
</td>
</tR>
<tr>
<?php
$butt = mysql_safe_query('SELECT * FROM upevents');
if(!mysql_num_rows($butt)) {
    echo '<tr><td>Alert: You have not added any events!</td></tr>';
} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '<tr><td>'.$achrow['upp'].'</td>';
        echo'<td style="width:20%;"><a href="../includes/delete_upp.php?upp_id='.$achrow['upp_id'].'">Delete</a></td></tr>';
    }
}
    ?>
    <?php
if(!empty($_POST)) {
                    if(mysql_safe_query('INSERT INTO upevents (upp) VALUES (%s)', $_POST['upp'])){
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    else{
                        echo '<div class="fail" > Uh huh, there was a problem </div><br><BR>';
                    }
                }
            ?>
    </tr><tr>
    <form method="Post">
<td >
<input name="upp" placeholder="Add Event">
</td>

    <td style="width:20%;">
    <input type="submit">
            </form>
</td>
</tr>
            </table>