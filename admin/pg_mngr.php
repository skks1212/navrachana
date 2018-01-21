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
    Page Manager
</h1>
<div id="uvon">
<table cellspacing="0px">
    <tr id="headtd">
        <td>
            Page
        </td>
        <td>
            Edit
        </td>
</tR>
<tr>
<?php
$noaccess = '<td><em>Cannot edit this file</em></td>';
if ($handle = opendir('../')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo '<tr><td>'.$entry.'</td>';
            if($entry=='index.php'){
                echo $noaccess;
            }
            else if($entry=='achievements.php'){
                echo $noaccess;
            }
            else if($entry=='layout'){
                echo $noaccess;
            }
            else if($entry=='admin'){
                echo $noaccess;
            }
            else if($entry=='includes'){
                echo $noaccess;
            }
            else if($entry=='img'){
                echo $noaccess;
            }
            else if($entry=='xml'){
                echo $noaccess;
            }
            else{
                echo '<td><a href="pg_edt.php?name='.basename($entry, '.php').'">Edit</a></td>';
            }
            echo'</tr>';
        }
    }

    closedir($handle);
}
?>
    </tr>
<Tr>
    <td colspan="2">
        <a href="new_pg.php">+ CREATE NEW PAGE</a>
</td>
</tr>
</table>
