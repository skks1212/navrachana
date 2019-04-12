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
        width:50%;
    }
    #uvon #headtd td{
        background:#ff5e00;
        color:white;
    }
    </style>
<title>Navrachana Sama</title>
<div class="lay">
<h1>
    Site Stats
</h1>
You have logged in as <b><?php echo $_SESSION['username'];?></b><br><br>
<?php
 include '../includes/usersontxt.php'; 
?>
<br><BR>
