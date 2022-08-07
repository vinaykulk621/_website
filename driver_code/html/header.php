<?php
require_once("./configuration/auth.php");
?>

<div class="header" id="header">

    <!--bms logo-->
    <a href="./index.php">
        <img src="./images/trans_bms_info.png" alt="BMSCE" id="college_logo">
    </a>

    <!--top right profile photo-->
    <a href="./profile.php">
        <img src="./images/trans_profile_img-removebg-preview.png" alt="PROFILE_PHOTO" id="profile_photo">
    </a>

    <!--Navbar container-->
    <div class="navbar">

        <!--Navbar content-->
        <span class="ho"><a href="./index.php">Home</a></span>
        <span class="ni"><a href="./campus.php">Campus</a></span>

        <!--dropdown container-->
        <div class="dropdown">

            <!--dropdown button-->
            <span class="ji">
                <button class="dropbtn">
                    Exams
                    <i class="fa fa-caret-down"></i>
                </button>
            </span>

            <!--dropdown content-->
            <div class="dropdown-content">
                <span class="hoo"><a href="form1.html">REGULAR</a></li></span>
                <span class="joo"><a href="form1.html">RE-REGISTER</a></li></span>
                <span class="poo"><a href="form_fast.html">FAST TRACK</a></span>
                <span class="ioo"><a href="https://gate.iitkgp.ac.in/" target="_blank">GATE</a></span>
                <span class="loo">
                    <a href="https://iimcat.ac.in/per/g01/pub/756/ASM/WebPortal/1/index.php?756@@1@@1" target="_blank">CAT</a>
                </span>

                <!--dropdown content end-->
            </div>

            <!--dropdown container end-->
        </div>

        <span class="oop">
            <a href="./results.html">Results</a>
        </span>

        <!-- shows the required button depending on the logged in or logged -->
        <?php
        if (User::isloggedin()) {
            echo '<a href="configuration/logout.php" style="float: right;">Logout</a>';
        } else {
            echo '<a href="./login.php" style="float: right;">Login</a>';
        }
        ?>
        <!--Navbar container end-->
    </div>

    <!--header container end-->
</div>