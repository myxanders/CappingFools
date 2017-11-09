<html>

    <title>ACME Access Denied</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/ProfilePage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/AccessDenied.css">
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
                    <a href="SSO.php">Log Out
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
            <form method="post" action="AccessRequest.php" id="accessForm">
                
                <div class="styled-select blue semi-square">
				<!-- THESE SHOULD BE TAKEN OFF THE DATABASE-->
                    <select>
                        <option value="" color="white;" disabled selected>Pick an application</option>
                        <option value="Salesforce">Salesforce</option>
                        <option value="Artifactory">Artifactory</option>
                        <option value="Assets">Assets Management</option>
                        <option value="Outlook">Outlook</option>
                        <option value="Skype">Skype for Business</option>
                        <option value="Teamcity">Teamcity</option>
						
						<!-- PSUEDO SQL CODE 
						INSERT INTO application_request (appid, eid, description) 
							values ((SELECT application.appid FROM application WHERE application.description = HTML ARTIFICACT), 
							(SELECT employee.eid FROM employee where employee.username = HTML ARTIFACT), 
							HTML DESCRIPTION); 
						-->
                        
                    </select>
                </div>
                
                <div class="inputAndButton">
                    <input class="inputAccess" type="text" placeholder="Enter email or username..." name="access"> 
                    <button class="buttonAccess" type="submit">Submit</button> <br> <br>
                    <input class="inputDescription" type="text" placeholder="Enter what you would like to access..." name="access">
                    
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
                <a href="AccessDenied.php">Salesforce.com</a><br>
                <a href="AccessDenied.php">Artifactory</a><br>
                <a href="AccessDenied.php">Teamcity</a><br>
                <a href="AccessDenied.php">Outlook</a><br>
                <a href="AccessDenied.php">Skype for Business</a><br>
                <a href="AccessDenied.php">Assest Management</a>
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
