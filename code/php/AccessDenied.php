<html>

    <title>ACME Access Denied</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/Code/CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="/Code/CSS/ProfilePage.css">
        <script type="text/javascript" src="/Code/js/ProfilePage.js"></script> 
        <script type="text/javascript" src="/Code/js/Script.js"></script>
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
            	    <img src="/Assets/ACMElogo.png" alt="ACMElogo" style="width:100px;height:83px"></img>
                </div>
                
                
                <div id="myTopnav" class="topnav-list">
                    <a href="/Code/php/Search.php">Home
                        <span class="fa fa-address-card"></span>
                    </a>
                    <a href="/Code/php/profile.php">Profile
                        <span class="fa fa-question-circle"></span>
                    </a>
                    <a href="/Code/php/Apps.php">Apps
                        <span class="fa fa-tasks"></span>
                    </a>
                    <form class="topnav-list-search">
                        <input type="text" id="search" name="search" placeholder="&#128269; Search...">
                    </form>                
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                    <a href="/Code/php/SSO.php">Log Out
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
        <div id="main" class="main" align="center" style="margin-top:10%;">
            <h1>ACCESS DENIED</h1>
            <h2>It appears you do not have access to this application...</h2>
            <hr noshade>
        </div>
        <div id="message" align="center">
            <h2 id="applyAccess">Apply for access down below.</h2>
            <!-- ** QUESTION ** => Input username or email address for access thats sent to admin inbox?
                            ALSO => user should already be logged in, to access apps page,
                                    when a guest clicks on apps it takes them to log in page-->
            <form method="post" action="/Code/php/AccessRequest.php" id="accessForm">
                
                <div class="styled-select blue semi-square">
                    <select>
                        <option value="" color="white;" disabled selected>Pick an application</option>
                        <option value="Salesforce">Salesforce</option>
                        <option value="Artifactory">Artifactory</option>
                        <option value="Assets">Assets Management</option>
                        <option value="Outlook">Outlook</option>
                        <option value="Skype">Skype for Business</option>
                        <option value="Teamcity">Teamcity</option>
                        
                    </select>
                </div>
                
                <div class="inputAndButton">
                    <input class="inputAccess" type="text" placeholder="Enter email or username..." name="access">
                    <button class="buttonAccess" type="submit">Submit</button>
                </div>
            </form>
        </div>
    
    
        <!-- Footer -->
        <div class="footer">
            <div class="footer-contact">
                <h4>Contact</h4>
                <a href="">contact@acme.com</a>
            </div>
            <div class="footer-apps">
                <h4>Applications</h4>
                <a href="/Code/php/AccessDenied.php">Salesforce.com</a><br>
                <a href="/Code/php/AccessDenied.php">Artifactory</a><br>
                <a href="/Code/php/AccessDenied.php">Teamcity</a><br>
                <a href="/Code/php/AccessDenied.php">Outlook</a><br>
                <a href="/Code/php/AccessDenied.php">Skype for Business</a><br>
                <a href="/Code/php/AccessDenied.php">Assest Management</a>
            </div>
        </div>
        
    </body>

</html>

<style>
    .inputAccess {
        padding: 2%;
        margin-right: 2%;
        width: 67%;
        
    }
    
    .buttonAccess {
        padding: 2%;
        width: 17%;
        cursor: pointer;
    }
</style>