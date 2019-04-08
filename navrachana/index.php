<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<title>Navrachana Sama</title>
<Style>
    *{
        margin:0px;
        
    }
    html,body{
        font-family: 'Montserrat', sans-serif;
    }
    .topdock{
        text-align:center;
        background: white;
        position:fixed;
        left:0px;
        right:0px;
        top:0px;
        z-index:20; 
    }
    .topdock table{
        width: 100%;
    }
    #menu_operator{
        width: 40px;
    }
    .topdock td{
        text-align:center;
    }
    #mentd{
        width:35px;
        position:absolute;
        top:13px;
        left:13px;
        cursor:pointer;
    }
    input:focus{
        outline:none;
    }
    #mentdt{
        padding:20px;
        font-size: 20px;
        color:gre;
    }
    .bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
    border-radius: 5px;
}
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}
.arrow{
    transition: 0.4s;
}
.change .arrow {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);

}
#menubar{
    width:30%;
    top:67px;
    bottom:0px;
    overflow:auto;
    left:-30%;
    transition:0.4s;
    position:fixed;
    background:white;
    z-index:19;
}
.menucont{
    padding:0px;

}
.menucont ul{
    transition:0.4s;
    padding:0px;
    height:0px;
    overflow:hidden;
}
.menucont ul li{
    padding:15px;
    padding-left:40px;
    background:transparent;
}
.menucont li{
    list-style-type:none;
    padding:15px;
    background:white;
    cursor:pointer;
}
.menucont li:hover{
    background:lightgrey;
}
.page{
    margin-top:67px;
}
.layout{
    width:1100px;
    margin-top: 50px;
    margin-bottom: 50px;
}
.heading{
    font-size: 40px;
}
p{
    line-height:150%;
    font-size:14px;
}
.marquee_head{
    color:white;
    background:#ff5e00;
    padding: 20px 0;
    width:100%;
    text-align: center;
}
.butt_on{
    padding:20px;
    background:lightgrey;
    cursor: pointer;
    text-align: center;
    margin:5px;
}
.butt_on:hover{
    background:grey;
}
#lay td{
    vertical-align: top;
}
.ach_col{
    cursor:pointer;
    height: 200px;
    background-size:cover;
    transition:0.4s;

}
.hl_col{
    height: 300px;
    background-size:cover;
    transition:0.4s;
}
.ach_over{
    color:white;
    padding:5px;
    background: grey;
    vertical-align:bottom;
    transition:0.4s;
}
.hl_over{
    color:white;
    padding:5px;
    background: grey;
    vertical-align:bottom;
    transition:0.4s;
    font-size:20px;
}
.ach_col:hover .ach_over, .hl_col:hover .hl_over{
    background: #ff5e00;
}
.ach_col:hover{
    -webkit-transform:rotate(2deg) scale(0.9);
  transform: rotate(2deg) scale(0.9);
}
.more_butt{
    color:white;
    background:grey;
    transition:0.4s;
    padding:20px;
    cursor:pointer;
    text-align:center;
}
.more_butt:hover{
    background:#ff5e00;
}
</style>
<?php
include 'layout/header.php';
include 'layout/menu.php';
include 'includes/mysql.php';
?>
<div class="page">
    
<?php
    include 'layout/banner.php';
?>
<center>
    <div class="layout">
        <table style="width:100%;" id="lay" cellspacing="20px">
            <tr>
                <td style="width:60%;">
        <div class="intro">
        <span class="heading">Welcome to Navrachana.</span><br><BR>
            <table>
                <tr>
                    <td>
                        <p><?php include 'layout/plugin/aboutschool.php';?></p>
                    </td>
                    <td style="font-size:10px;">
                        <img src="img/sys/delhi-logo.png"><br>
                        Affiliated to: CBSE, New Delhi<br> Affiliation No. 430003
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <Table cellspacing="0px;" style="width:100%;"><tr><td style="width:50%;">
        <div class="marquee_head">
            Happenings
        </div>

        <marquee style=" padding:20px;dislay:block;" height="200px"direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()"> 
        <?php include 'layout/plugin/happenings.php'; ?>
        </marquee></td><td style="width:50%;">
        <div class="marquee_head">
                Upcoming
            </div>
            <marquee style=" padding:20px;" height="200px"direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">   
            <?php include 'layout/plugin/upcoming.php'; ?>
            </marquee>            </td></tr></table><Br><Br>

            <?php include 'layout/plugin/highlights.php'; ?>

    </div>
</div>

</td>
<td>
<?php include 'layout/plugin/home_buttons.php'; ?>

    <span class="heading">Feathers In the Cap.</span><Br><br>
    <p>Proud Navrachanites bagging it</p>
    <br>
    <?php include 'layout/plugin/achieve.php'; ?>
</td>
</tr>
</table>
        </div>
<?php
include 'layout/footer.php';
?>