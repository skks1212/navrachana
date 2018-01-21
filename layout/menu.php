<div id="menubar">
<ul class="menucont">
    <li onclick="window.location='index.php';">
        Home
    </li>
    <li onclick="about_down(this)">
        <table><tr><td>About us </td><td><img class="arrow" src="img/sys/right.png" width="20px"></td></tr></table>
    </li>
    <ul id="aboutdown">
        <li>
            Management
        </li>
        <li>
            School Managing Committee
        </li>
        <li onclick="window.location='directors-message.php';">
            Director's Message
        </li>
        <li>
            Office Staff    
        </li>
        <li>
            Incharges
        </li>
        <li>
            Faculty
        </li>
        <li>
            Student's Council
        </li>
        <li>
            PTA Corner
        </li>
        <li>
            School Strength
        </li>
    </ul>
    <li onclick="facil_down(this)">
        <table><tr><td>Facilites </td><td><img class="arrow" src="img/sys/right.png" width="20px"></td></tr></table>
    </li>
    <ul id="facildown">
            <li>
                Infrastructure
            </li>
            <li>
                School rules
            </li>
            <li>
                Talent Nurturing
            </li>
            <li>
                SMS Facilities  
            </li>
            <li>
                General Guidelines
            </li>
            <li>
                Bus Facilities
            </li>
        </ul>
        <li onclick="window.location='Admissions.php';">
            Admissions
        </li>
        <li onclick="window.location='Admissions.php';">
            Sports
        </li>
        <li onclick="window.location='Admissions.php';">
            Events
        </li>
        <li onclick="other_down(this)">
            <table><tr><td>Others </td><td><img class="arrow" src="img/sys/right.png" width="20px"></td></tr></table>
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
            <li onclick="init_down(this)">
                <table><tr><td>Initiatives </td><td><img class="arrow" src="img/sys/right.png" width="20px"></td></tr></table>
            </li>
            <ul id="initdown">
                    <li>
                        Design For Change
                    </li>
                    <li>
                        NES Evening Activity Classes
                    </li>
                    <li>
                        Adoption of Aanganwadis
                    </li>
                </ul>
                <li onclick="window.location='Admissions.php';">
                    Awards & Accolades
                </li>
                <li onclick="window.location='Admissions.php';">
                    Aadhar Councelling Centre
                </li>
                <li onclick="alum_down(this)">
                    <table><tr><td>Alumni </td><td><img class="arrow" src="img/sys/right.png" width="20px"></td></tr></table>
                </li>
                <ul id="alumdown">
                        <li>
                            NEXSA office Bearers
                        </li>
                        <li>
                            Registration Form
                        </li>
                        <li>
                            Letter From The President
                        </li>
                    </ul>
                <li onclick="window.location='Admissions.php';">
                    Contact us
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
    downer.style.height = downer.style.height === '430px' ? '0px' : '430px';
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