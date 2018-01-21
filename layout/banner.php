<style>
    .banner{
    position:relative;
    overflow:hidden;
    height:400px;
}
.top{
    
}
.downer{
    top:0px;
    bottom:0px;
    left:0px;
    right:0px;
    width:100%;
    position:absolute;
    transition:0.5s ease-in-out;
}
.banner:hover .downer{
    -webkit-transform: rotate(2deg), scale(1.2);
  transform: rotate(2deg) scale(1.2);
}
.upper{
    padding:50px;
    padding-left:20%;
    padding-right:50%;
    position:absolute;
}
.banner span{
    color:white;
    font-size: 50px;
}
.banner p{
    color:lightgrey;
    line-height:150%;
    font-family: 'Roboto', sans-serif;
    font-size:17px;
}
.banner:hover{
    background-size:120%;
}
.banner .heading{
    font-size:50px;
}
</style>
<?php $butt = mysql_safe_query('SELECT * FROM banner');
if(!mysql_num_rows($butt)) {
    echo '';
} else {
    while($achrow = mysql_fetch_assoc($butt)) {
        echo '
        <div class="banner">
        ';?>
        <div class="downer top" style="background: linear-gradient(to left, rgba(255, 94, 0, 0.5) 0%,rgba(255, 94, 0, 0.892) 60%), url('img/banner/<?php echo $achrow['ban_bg'];?>');background-position:0 -100;
    background-size:cover;">
        <?php echo '</div><div class="upper">
        <span>'.$achrow['ban_tit'].'</span><br><br>
        <p>'.$achrow['ban_sub'].'</p>
        </div>
        </div>';
    }
}  
?>