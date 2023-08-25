
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>applications</title>
    <link rel="stylesheet" href="style_home.css" />
    <script src="https://kit.fontawesome.com/7924b0ac3e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="profilepic">
       <!--     <img src="../profile.png" alt="" width="50%" />-->
        </div>
        <div class="contents">
            <h2 class="pg home activepage">HOME</h2>
            <h2 class="pg application">APPLICATONS</h2>
            <h2 class="pg u-application">U-APPLICATIONS</h2>
            <h2 class="pg status">STATUS</h2>
            <h2 class="pg tutorial">TUTORIAL</h2>
            <h2 class="pg support">SUPPORT</h2>
        </div>
        <div class="logout">
            <h2><a href ="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> logout</a></h2>
        </div>
    </div>

    <div class="main">
        <div class="header">
            <input class="search" type="text" placeholder="search..." />
            <div class="date"></div>
            <div class="notification">
                <h1>notifications <i class="fa-solid fa-bell"></i></h1>
            </div>
        </div>

        <div class="homecontent">
        <h1 class="Name_user">Name: Adarsh Sharma</h1>
            <h2 class="User_id">User-id: </h2>
            <h2 class="user_email">user Email : xyzamityuniversity@gmail.com</h2>
            <h2 class="user_phone">user Phone : 9090909990</h2>
        </div>

        <div class="applicationcontent hidden">
            <div class="leaveapplica">
                <a href="applicationinput.php">
                    <img src="leave application.webp" alt="" width="80%" />
                </a>
                <h3>Leave Application</h3>
            </div>

            <div class="sickleave">
                <a href="applicationinput.php">
                    <img src="leave application.webp" alt="" width="80%" />
                </a>
                <h3>Sick Leave</h3>
            </div>
            <div class="tcapplication">
                <a href="applicationinput.php">
                    <img src="leave application.webp" alt="" width="80%" />
                </a>
                <h3>TC Application</h3>
            </div>
            <div class="medileave">
                <a href="applicationinput.php">
                    <img src="leave application.webp" alt="" width="80%" />
                </a>
                <h3>Medical Leave Application</h3>
            </div>
        </div>
        <div class="support-Page hidden">
            <h1 class="supporthead">NEED SUPPORT?</h1>
            <h2 class="reachUs">You can reach us by:</h2>
            <h2 class="emailsupport">Email : xyzamityuniversity@gmail.com</h2>
            <h2 class="callsupport">Phone : 9090909990</h2>
        </div>
    </div>
</body>
<script src="script.js"></script>

</html>

