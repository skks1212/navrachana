<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
  *{
    font-family:'Montserrat', sans-sherif;
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
    height:100%;
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
  </style>
<div class="topdock">
<table>
<tr>
<td id="mentd" onclick="menu_toggle(this)">
<div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</td>
<td id="mentdt">
    LEGACY BACKEND
</td>
</tr>
</table>
</div>