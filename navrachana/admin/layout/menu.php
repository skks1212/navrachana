<div id="menubar">
<ul class="menucont">
    <li onclick="window.location='index.php';">
        Home
    </li>
    <li onclick="about_down(this)">
        <table><tr><td>Home page</td><td><img class="arrow" src="../img/sys/right.png" width="20px"></td></tr></table>
    </li>
    <ul id="aboutdown">
        <li onclick="window.location='banner.php';">
            Banner
        </li>
        <li onclick="window.location='buttons.php';">
            Buttons
        </li>
        <li onclick="window.location='events.php';">
            Events
        </li>
        <li onclick="window.location='abt_scl.php';">
            About School    
        </li>
        <li>
            Thought
        </li>
        <li onclick="window.location='highlights.php';">
            Highlights
        </li>
        <li>
            Testimonials
        </li>
    </ul>
    <li onclick="window.location='pg_mngr.php';">
            Page Manager
        </li>
        <li onclick="window.location='Admissions.php';">
            Header
        </li>
        <li onclick="window.location='Admissions.php';">
            Footer
        </li>
        <li onclick="window.location='achievements.php';">
            Achievements
        </li>
        <li onclick="window.location='Admissions.php';">
            Site Settings
        </li>
        <li onclick="other_down(this)">
            <table><tr><td>Others </td><td><img class="arrow" src="../img/sys/right.png" width="20px"></td></tr></table>
        </li>
        <ul id="otherdown">
                <li>
                    Circlulars
                </li>
                <li>
                    Publications
                </li>
                <li>
                    Holidays
                </li>
                <li>
                    Curriculum  
                </li>
                <li>
                    Shopping Guide
                </li>
                <li>
                    Award Prizes
                </li>
                <li>
                    Pre-primary
                </li>
                <li>
                    Board Results
                </li>
                <li>
                    Leave/Transfer Certificate
                </li>
            </ul>
            <br>
            <br>
            <li onclick="window.location='../includes/logout.php';">
            Log out
            </li>
</ul>
</div>

<script>
function menu_toggle(x) {
    var menubar = document.getElementById("menubar");
    var menuback = document.getElementById("menuback");
    x.classList.toggle("change");
    menubar.style.left = menubar.style.left === '0%' ? '-30%' : '0%';
}
function about_down(x) {
    var downer = document.getElementById("aboutdown");
    downer.style.height = downer.style.height === '340px' ? '0px' : '340px';
    x.classList.toggle("change");
}
function facil_down(x) {
    var downer = document.getElementById("facildown");
    downer.style.height = downer.style.height === '290px' ? '0px' : '290px';
    x.classList.toggle("change");
}
function other_down(x) {
    var downer = document.getElementById("otherdown");
    downer.style.height = downer.style.height === '430px' ? '0px' : '430px';
    x.classList.toggle("change");
}
function init_down(x) {
    var downer = document.getElementById("initdown");
    downer.style.height = downer.style.height === '145px' ? '0px' : '145px';
    x.classList.toggle("change");
}
function alum_down(x) {
    var downer = document.getElementById("alumdown");
    downer.style.height = downer.style.height === '145px' ? '0px' : '145px';
    x.classList.toggle("change");
}
</script>