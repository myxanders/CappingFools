<?php
include('session.php');
include('nav_check.php');
?>

<html>

    <title>My Applications</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Admin.css">
        <script type="text/javascript" src="../js/ProfilePage.js"></script> 
        <script type="text/javascript" src="../js/Script.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    </head>
    
    
    <body>
    <!-- Navbar -->
        
        <header class="topnav" role="banner">
            
            <nav class="topnav container" role="navigation">
    
                
                <div id="main">
            	    <!--<span style="font-size:30px;cursor:pointer;" align=left onclick="openNav()">&#9776;</span>-->
            	    <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="Search.php">Home
                        <span class="fa fa-home"></span>
                    </a>
                    <a href="profile.php">Profile
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>
                    <a href="Admin.php" id="admin">Administrator
                        <span id="admin" class="fa fa-address-card"></span>
                    </a>
                    <a href="logout.php">Log Out
                        <span class="fa fa-space-shuttle"></span>
                    </a>
                    <!--<form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="Search...">
                    </form>-->
                
                </div>
                <hr id="topHR" noshade>
                <hr id="topHR" noshade>
                
                
            </nav>
    
        </header>
        <br>
    
    
        <div class="containerApps" align=center style="margin-top:150px;">
            <h1> Choose an action to execute </h1>
            <hr style="border-top:1px solid darkred;">
                <button class="leftButton" onclick="window.location.href='Manager.php'">
                    Application Request Form
                </button>

                <button class="rightButton" onclick="window.location.href='HR.php'">
                    Add/Remove Employee
                </button>

            <!--</div>-->
        </div>
        <div style="position:fixed; bottom:0; right: 0; width: 100px; float:right;">
            <a href="https://icons8.com"><font color=grey size="1">All Applications Icons credited to icons8.com.</font></a>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <div class="footer-contact">
                <h4>Contact</h4>
                <a href="">contact@acme.com</a>
            </div>
            <div class="footer-apps">
                <h4>Applications</h4>
                <a href="AccessDenied.php">Salesforce.com</a><br>
                <a href="AccessDenied.php">Artifactory</a><br>
                <a href="AccessDenied.php">Teamcity</a><br>
                <a href="AccessDenied.php">Outlook</a><br>
                <a href="AccessDenied.php">Skype for Business</a><br>
                <a href="AccessDenied.php">Assest Management</a>
            </div>
        </div>
    </body>
<script>
function hideHR() {
	document.getElementById("HR").style.display = "none";
}
</script>
</html>

<style>
    .app {
        width: 185px;
        height: 185px;
        background-color: #f44336;
        color: white;
        border: 2px solid #f44336;
        border-radius: 8px;
        padding: 50px;
        transition-duration: 0.4s;
        margin: 5px;
        cursor: pointer;
    }
    
    .appcontainer {
        max-width: 50%;
        margin-left: 25%;
        margin-bottom: 5%;
    }

</style>
