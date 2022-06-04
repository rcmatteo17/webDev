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
                    <li><a class="active" href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="promotions.php">Deals</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>

        <section id="titleBanner" class="section-p1">
            <h4>Leave Us a Message</h4>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
                <h2>Visit ADFA or contact us today</h2>
                <h3>Academy Details</h3>
                <div>
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <p>1 Northcott Drive, Campbell, ACT</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>z5308054@ad.unsw.edu.au</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>+61 0412 345 678</p>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <p>Monday to Friday: 0730 - 1630</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.5708274482754!2d149.16395191578022!3d-35.291795301736606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164d916d969151%3A0xc83b7d473c2487e1!2sUNSW%20Canberra%20at%20the%20Australian%20Defence%20Force%20Academy!5e0!3m2!1sen!2sau!4v1651455136696!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!--
        <section id="form-details">
            <form action="">
                <h2>Feedback</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message here..."></textarea>
                <button class="normal">Submit</button>
            </form>
        </section>
        -->

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
                <a href="about.html">About Us</a>
                <a href="promotions.html">Delivery Info</a>
                <a href="about.html">Terms and Conditions</a>
                <a href="contact.html">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="cart.html">View Cart</a>
                <a href="#">Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="contact.html">Help</a>
            </div>

            <div class="copyright">
                <p>2022, Assignment1 - Dynamic Website - Harper Cahill, Rob Clappis, Tian Kingsbury</p>
                <p>Today's date is <b><?php echo date("d/m/Y") ?></b> and it's a <b><?php echo date('l') ?></b> today!</p>
            </div>
        </footer>

        <script src="js/script.js"></script>
    </body>
</html>