<!DOCTYPE html>
<html>
<!-- <html lang="en-US">-->

<head>
    <meta charset="utf-8">
    <title>Facebook Home Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="webimages/fb.png" sizes="16x16" type="image/png">
    <script type="text/javascript" src="toggle.js"></script>
</head>

<body>
    <nav>
        <div id="logo"></div>
        <div id="ulwrapper">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">About</a></li>
                <li><a href="index.html">Team</a></li>
                <li><a href="index.html">Gallery</a></li>
                <li><a href="#bottom">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div id="major-part">
        <div class="photos-collection">
            <div class="picture-box">
                <div id="user1">
                    <!-- double hwclass-->
                    <div class="profile-name">
                        <p class="profile-name-written">Mark</p>
                    </div>
                    <!--span-->
                </div>
            </div>
            <div class="picture-box">
                <div id="user2">
                    <div class="profile-name">
                        <p class="profile-name-written">Jon</p>
                    </div>
                </div>
            </div>
            <div class="picture-box">
                <div id="user3">
                    <div class="profile-name">
                        <p class="profile-name-written">Rahul</p>
                    </div>
                </div>
            </div>
            <div class="picture-box">
                <div id="user4">
                    <div class="profile-name">
                        <p class="profile-name-written">Gal</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="sign-up-form">
            <!-- difference between section and div-->
            <form id="signup" method="get" action="register.php">
            <div id="write-up">
                <p style="font-family:Helvetica, Arial, sans-serif; font-weight: bold; color:#333; font-size:36px;">Sign Up</p>
                <p style="font-family: 'Freight Sans', Helvetica, Arial, sans-serif !important; font-size:19px; color:#1d2129; margin-top:-15px;">It's free and always will be.</p>
            </div>
                <input type="text" name="fname" value="" placeholder="First Name">
                <input type="text" name="lname" value="" placeholder="Last Name">
                <input type="text" name="mobile" value="" placeholder="Mobile number">
                <input type="text" name="email" value="" placeholder="Email address">
                <input type="password" name="password" value="" placeholder="New Password">
                <h3 style="font-family: Helvetica;">Birthday</h3>
                <select name="dd">
                
      <option value="day">Day</option>
      <?php for($i=1;$i<=30;$i++){
                ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php } ?>
    </select>
                <select name="mm">
                <option value="month">Month</option>
                
                <?php for($i=1;$i<=12;$i++){
                $dateObj   = DateTime::createFromFormat('!m', $i);
                $month = $dateObj->format('F');
                ?>
      <option value="<?php echo $i; ?>"><?php echo $month;?></option>
      <?php } ?>
    </select>
                <select name="yy">
      <option value="year">Year</option>
      <?php for($i=date('Y');$i>=1900;$i--){
                ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php } ?>
    </select>
                <br>
                <input type="radio" name="gender" value="F" style="height: 20px; width:20px;">Female
                <input type="radio" name="gender" value="M" style="height: 20px; width:20px;">Male
                <br>
                <p style="font-family:Helvetica; font-size:11px; color:#777;">By clicking Create an account, you agree to our Terms and<br> confirm that you have read our Data Policy, including our Cookie<br> Use Policy. You may receive SMS message notifications from<br> Facebook and can opt out at any time.
                </p>
                <button id="create-account" type="submit">Create an account</button>
                <h2 style="font-family: Helvetica;">Already Have an Account? <span style=" color:BLUE;" onclick="showLoginForm()">Login</span></h2>
            </form>
            <form id="login" method="post" action="login.php">
            <div id="write-up">
                <p style="font-family:Helvetica, Arial, sans-serif; font-weight: bold; color:#333; font-size:36px;">Log In</p>
                <p style="font-family: 'Freight Sans', Helvetica, Arial, sans-serif !important; font-size:19px; color:#1d2129; margin-top:-15px;">It's free and always will be.</p>
            </div>
            <input type="text" name="userid" placeholder="E-Mail"><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button id="create-account" type="submit">Login</button>
            <h2 style="font-family: Helvetica;">Don't Have an Account? <span style=" color:BLUE;" onclick="showSignupForm()">Signup</span></h2>
            </form>
        </section>
    </div>
    <footer id="pageFooter">
        <!--<marquee>Team Members: Harshul Singhal, Parth Arora, Avinash, Kinjal Anand, Akanksha, Medha Saha, Dravit, Naman Arora, Mudit Khandelwal, Aviral Goyal, Akshita Bansal, Sarthak Sehgal, Rahul Sharma, Manasvi Duggal, Divij Bhatia, Shubham, Sarthak Kapoor, Raghav Mehta, Akshita Bansal, Dheerain Jain, Nupur Garg</marquee>-->
        <div id="contact">
            <p style="font-family:Helvetica; font-size:25px; color:white;">Contact Us
            <hr width=20% style="margin-top:-20px;">
            </p>
            <p style="font-family:Helvetica; font-size:18px; color:white;">Facebook HQ<br> Menlo Park, CA</p>
        </div>
        <div id="relatedtags">
            <p id="rel" style="font-family:Helvetica; font-size:25px; color:white;">Related Tags
                <hr width=20% style="margin-top:-20px;">
            </p>
            <ul>
                <li><a href="index.html">Find Friends</a></li>
                <li><a href="index.html">Developers</a></li>
                <li><a href="index.html">Messenger</a></li>
                <li><a href="index.html">Login</a></li>
                <li><a href="index.html">Sign Up </a></li>
                <li><a href="index.html">Moments</a></li>
                <li><a href="index.html">Locations</a></li>
            </ul>
        </div>
        <div id="follow">
            <p style="font-family:Helvetica; font-size:25px; color:white;">Follow us
                <hr width=20% style="margin-top:-20px;">
            </p>
            <a href="http://www.twitter.com" target="_blank"><img src="webimages/twi.png"></a>
            <a href="http://www.facebook.com/gdgjiitnoida" target="_blank"><img src="webimages/fb.png"></a>
            <a href="http://www.linkedin.com" target="_blank"><img src="webimages/link.png"></a>
            <a href="http://www.instagram.com" target="_blank"><img src="webimages/insta.png"></a>
        </div>
    </footer>
    <a name="bottom"></a>
</body>

</html>
