<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 1 Ecommerce Site</title>
        <script src="https://kit.fontawesome.com/d363a17780.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>


    <body>

        <section id="header"> 
            <a href="#"><img src="img/logo.png" class="logo" alt="" width="150" height="auto"></a>

            <div>
                <ul id="navbar">
                    <li><a href="homePage.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a class="active" href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="promotions.php">Deals</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                    <!--<a href="#" id="close"><i class="far fa-times"></i></a> /!-->
                </ul>
            </div>
        </section>

        <section id="titleBanner" class="section-p1">
            <h4>About Us</h4>
        </section>

        <section id="mission">
            <div class="displayBox1" style="background-image: url(img/display.jpg)">
                <div class="descript">
                    <h2>Who are we?</h2>
                    <p>We represent Academy Classifieds, ADFA's very own marketplace for buy, swap and sell. </p>
                    <p>Contact the store owners to become a seller or a trader and get rid of those items before moving day.</p>
                </div>
            </div>
            <div class="displayBox2" style="background-image: url(img/display2.jpg)">
                <div class="descript">
                    <h2>Why go Online?</h2>
                    <p>For an assignment of course!</p>
                </div>
            </div>
            <div class="displayBox1" style="background-image: url(img/display3.jpg)">
                <div class="descript">
                    <h2>What do we sell?</h2>
                    <p>We sell whatever the Academy is willing to sell</p>
                    <button class="normal">Shop Now!</button>
                </div>
            </div>
            <div class="displayBox2" style="background-image: url(img/display4.jpg)">
                <div class="descript">
                    <h2>More questions?</h2>
                    <p>Contact us using the details on the following page</p>
                    <a href="contact.php">Click Here!</a>
                </div>
            </div>
        </section>

        <section id="about">
            <h4>The Authors</h4>
            <div class="auth-con">
                <img src="img/authors/rob.png" alt="">
                <div class="author">
                    <h4>Harper Cahill</h4>
                    <h3>HTML and CSS Director</h3>
                    <p>Harper is a BCCs Student at UNSW Canberra and hopes to graduate at the end of this year, </p>
                    <p>and then progress to RMC Duntroon for his final year of Army Officer Training</p>
                </div>
                <span class="contact">
                    <p>Mobile: +61 0421255553</p>
                    <p>Email: z5308054@ad.unsw.edu.au</p>
                </span>
            </div>
            <div class="auth-con">
                <img src="img/authors/rob.png" alt="">
                <div class="author">
                    <h4>Rob Clappis</h4>
                    <h3>Database Architect</h3>
                    <p>Rob is a BCCs Student at UNSW Canberra and hopes to graduate at the end of this year, </p>
                    <p>and then progress to RMC Duntroon for his final year of Army Officer Training</p>
                </div>
                <span class="contact">
                    <p>Mobile: +61 04</p>
                    <p>Email: z530@ad.unsw.edu.au</p>
                </span>
            </div>
            <div class="auth-con">
                <img src="img/authors/rob.png" alt="">
                <div class="author">
                    <h4>Tian Kingsbury</h4>
                    <h3>Documents Director</h3>
                    <p>Tian is a BCCs Student at UNSW Canberra and hopes to graduate at the end of this year, </p>
                    <p>and then progress onto a boat or something Navy related</p>
                </div>
                <span class="contact">
                    <p>Mobile: +61 04</p>
                    <p>Email: z530@ad.unsw.edu.au</p>
                </span>
            </div>

        </section>

        <section id="sign-up" class="section-p1">
            <div class="text">
                <h4>Sign up for the Academy Weekly Newsletter</h4>
                <p>Get E-mail updates on the Corps latest offers and events</p>
            </div>
            <div class="form">
                <input type="text" placeholder="E-mail">
                <button class="normal">Sign up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" 
                src="img/logo.png" alt="" width="150px" height="auto">
                <h4>Contact</h4>
                <p><strong>Address: </strong>1 Northcott Drive, Campbell, ACT</p>
                <p><strong>Phone: </strong>+61 1234 555 666</p>
                <p><strong>Hours: </strong>0730 - 1630, Mon - Fri</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <a href="https://www.facebook.com/AustralianDefenceForceAcademy"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/comdtadfa?lang=en"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/adfacademy/?hl=en"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="about.php">About Us</a>
                <a href="promotions.php">Delivery Info</a>
                <a href="about.php">Terms and Conditions</a>
                <a href="contact.php">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="cart.php">View Cart</a>
                <a href="#">Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="contact.php">Help</a>
            </div>

            <div class="copyright">
                <p>2022, Assignment1 - Dynamic Website - Harper Cahill, Rob Clappis, Tian Kingsbury</p>
                <p>Today's date is <b><?php echo date("d/m/Y") ?></b> and it's a <b><?php echo date('l') ?></b> today!</p>
            </div>
        </footer>s

        <script src="js/script.js"></script>
    </body>
</html>
