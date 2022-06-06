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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a class="active" href="promotions.php">Deals</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>       
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>

        <section id="titleBanner" class="section-p1">
            <h4>Promotions, Deals, and Shipping</h4>
        </section>

        <section id="mission">
            <div class="displayBox1" style="background-image: url(img/deal.jpg)">
                <div class="descript">
                    <h2>Free Shipping</h2>
                    <p>Enjoy free shipping on all orders located and delivering on campus!</p>
                    <p>Expect to pay Australia Post rates for all other orders.</p>
                </div>
            </div>
            <div class="displayBox2" style="background-image: url(img/deal1.jpg)">
                <div class="descript">
                    <h2>Promotions</h2>
                    <p>All First Years enjoy 20% off all essential items</p>
                    <p>Offer lasts until Orange Book</p>
                    <button class="normal">Shop Now!</button>
                </div>
            </div>
            <div class="displayBox1" style="background-image: url(img/deal2.jpg)">
                <div class="descript">
                    <h2>Spring Clean</h2>
                    <p>All Third Year Army TOs enjoy no sellers fee</p>
                    <p>Lasts from Blue Book until Grad Day</p>
                    <button class="normal">Become a Seller Now!</button>
                </div>
            </div>
            <div class="displayBox2" style="background-image: url(img/deal3.jpg)">
                <div class="descript">
                    <h2>Compassionate Reasons</h2>
                    <p>Contact us via the link below</p>
                    <p>Case-By-Case basis for extraordinary circumstances</p>
                    <p>Enjoy AfterPay methods</p>
                    <a href="contact.html">Click Here!</a>
                </div>
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
        </footer>

        <script src="js/script.js"></script>
    </body>
    
</html>
