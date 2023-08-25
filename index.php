<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Applica</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Style.css">
        
    <body>
        <div class="background">

            <div class="panel">
                <div class="button-box">
                    <div id="btn" class="btn"></div> 
                    <button id="stu" type="button" class="toggle-button">Student</button>
                    <button id="teacher" type="button" class="toggle-button">Teacher</button>
                    <button id="acc" type="button" class="toggle-button">Accountant</button>
                    <button id="principle" type="button" class="toggle-button">Principle</button>
                </div>
                <div class="container">
                    <h1>WELCOME</h1>
                    <div class="slider">
                        <div class="panel1">
                            <!-- <input id="usertf1" class="textfeild" type="text" placeholder="Username"><br>
                            <input id="passtf1" class="textfeild" type="password" placeholder="Password"><br> -->
                            <div class="containlft">
                                <!-- <input  class="cbxremember" type="checkbox" id="remeberme"> -->
                            <!-- <label for="remeberme"> Remember me</label>
                            <p class="forgotpass"> Forgot password? </p> -->
                            </div>
                            <br>
                            <!-- <button class="login">Login</button> -->

                            <!-- php form -->
                            <form action="login.php" method="post">

                            <!-- <h2>LOGIN</h2> -->

                            <?php if (isset($_GET['error'])) { ?>

                            <p class="error">
                                <?php echo $_GET['error']; ?>
                            </p>

                            <?php } ?>

                            <label>User Name</label>

                            <input type="text" name="uname" placeholder="User Name" require=""><br>

                            <label>Password</label>

                            <input type="password" name="password" placeholder="Password"><br>

                            <button type="submit">Login</button>
                            </form>
                        </div>
                        <div class="panel2">
                            <input id="usertf2" class="textfeild" type="text" placeholder="Username"><br>
                            <input id="passtf2" class="textfeild" type="password" placeholder="Password"><br>
                            <div class="containlft">
                                <input  class="cbxremember" type="checkbox" id="remeberme">
                            <label for="remeberme"> Remember me</label>
                            <p class="forgotpass"> Forgot password? </p>
                            </div>
                            <br>
                            <button class="login">Login</button>
                        </div>
                        <div class="panel3">
                            <input id="usertf3" class="textfeild" type="text" placeholder="Username"><br>
                            <input id="passtf3" class="textfeild" type="password" placeholder="Password"><br>
                            <div class="containlft">
                                <input  class="cbxremember" type="checkbox" id="remeberme">
                            <label for="remeberme"> Remember me</label>
                            <p class="forgotpass"> Forgot password? </p>
                            </div>
                            <br>
                            <button class="login">Login</button>
                        </div>
                        <div class="panel4">
                            <input id="usertf4" class="textfeild" type="text" placeholder="Username"><br>
                            <input id="passtf4" class="textfeild" type="password" placeholder="Password"><br>
                            <div class="containlft">
                                <input  class="cbxremember" type="checkbox" id="remeberme">
                            <label for="remeberme"> Remember me</label>
                            <p class="forgotpass"> Forgot password? </p>
                            </div>
                            <!--<br>
                            <button class="login">Login</button>-->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="script/script.js" ></script>

    
    </body>
</html>