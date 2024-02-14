<?php
require("basics.php"); 
?>
    <body>
        <div>
        <?php include("header.php") ?>
        </div>
        <div class="container1">
            <div class="welcoming">
                <p>Step into a different world and lose yourself in the magic of reading</p>
            </div>
            <div class="container2">
                <h1>Rigestration</h1>
                <div class="error">please enter your name</div>
                <form name="signupform" method="POST" action="signup.html">
                    <div class="parent">
                        <div>
                            <label for="firstName">First Name </label>
                            <input type="text" name="firstName" id="firstName" class="firstName" oninput="checkFirstName()"/>
                        </div>
                        <div>
                            <label for="lastName">Last Name </label>
                            <input type="text" name="lastName" id="lastName" class="lastName"/>    
                        </div>
                        <div>
                            <label for="email">Email </label>
                            <input type="email" name="email" id="email" class="email"/>
                        </div>
                        <div>
                            <label for="phone">Phone </label>
                            <input type="text" name="phone" id="phone" class="phone"/>
                        </div>
                        <div class="passdiv">
                            <label for="password">Password </label>
                            <input type="password" name="password" id="password" class="password"/>
                            <i class="fa-regular fa-eye-slash hide"></i>
                        </div>
                        <div class="passdiv">
                            <label for="coPassword">Confirm Password </label>
                            <input type="password" name="coPassword" id="coPassword" class="coPassword"/>
                            <!-- <i class="fa-regular fa-eye show"></i> -->
                            <i class="fa-regular fa-eye-slash hide"></i>
                        </div>
                    </div>

                    <input type="submit" name="Signup" value="Signup" onclick="signup()">
                    <p class="changeAcc">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
        <!-- <div class="f">hi</div>
    <br>
        <div class="ff">hi</div> -->
    </body>
</html>