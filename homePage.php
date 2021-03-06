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
                    <li><a class="active" href="homePage.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="promotions.php">Deals</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li> 
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>

        <section id="hero"> 
            <h4>Pre-Loved Offer</h4>
            <h2>Super Value Deal</h2>
            <h1>On all second-hand items</h1>
            <p>Save the planet and your money!</p>
            <a href="shop.php"><button class="normal">Shop now</button></a>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f1.png" alt="">
                <h6><a href="promotions.php">Free Shipping</a></h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6><a href="shop.php">Online Order</a></h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6><a href="promotions.php">Save Money</a></h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6><a href="promotions.php">Promotions</a></h6>
            </div>

            <div class="fe-box">
                <img src="img/features/f5.png" alt="">
                <h6><a href="contact.php">24/7 Support</a></h6>
            </div>
        </section>

        <!--Potential to use a scrollable function to introduce arrow keys that will allow the user to click through the list rather than scroll-->
        <section id="product1" class="section-p1">
            <h2>Featured Pre-Loved Products</h2>
            <p>The best of the Corps' second hand items</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/p1.jpg" alt="">
                    <div class="des">
                        <span>Molly Esmonde</span>
                        <h5>Brooks Glycerin 19</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$180</h4>
                    </div>
                    <a href="product1.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p2.jpg" alt="">
                    <div class="des">
                        <span>Melvin Ding</span>
                        <h5>FZ6R Lams Approved</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$6,000</h4>
                    </div>
                    <a href="product2.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p3.jpg" alt="">
                    <div class="des">
                        <span>Fraser Morgan</span>
                        <h5>Mailbox</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$100 ono</h4>
                    </div>
                    <a href="product3.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p4.jpg" alt="">
                    <div class="des">
                        <span>Alex Hill</span>
                        <h5>35" Asus Monitor</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$675</h4>
                    </div>
                    <a href="product4.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p5.jpg" alt="">
                    <div class="des">
                        <span>Odette McCall</span>
                        <h5>Black Court Shoes size 6.5</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Free</h4>
                    </div>
                    <a href="product5.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p6.jpg" alt="">
                    <div class="des">
                        <span>Tallis Coman</span>
                        <h5>2013 Subaru Liberty</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$16,000</h4>
                    </div>
                    <a href="product6.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p7.jpg" alt="">
                    <div class="des">
                        <span>Matthew Dawson</span>
                        <h5>2012 Nissan Dualis</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$14,000</h4>
                    </div>
                    <a href="product7.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p8.jpg" alt="">
                    <div class="des">
                        <span>Ellis Lambourne</span>
                        <h5>Phenix Ski Overalls</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$45</h4>
                    </div>
                    <a href="product8.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>

        </section>

        <section id="banner" class="section-m1">
            <h4>Give Away Items</h4>
            <h2>Up to <span>100% off</span> - All free items</h2>
            <button class="normal">Shop Now</button>
        </section>

        <section id="product2" class="section-p1">
            <h2>Newest Arrivals</h2>
            <p>The freshest items available</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/p9.jpg" alt="">
                    <div class="des">
                        <span>Zac Pernice</span>
                        <h5>Edelrid Climbing Harness - Size M</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$120</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p10.jpg" alt="">
                    <div class="des">
                        <span>Natasha Schneider</span>
                        <h5>Medium Protective Leather Jacket</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$80</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p11.jpg" alt="">
                    <div class="des">
                        <span>PS4 Pro 1TB</span>
                        <h5>Adam Lindsell</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$450</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p12.jpg" alt="">
                    <div class="des">
                        <span>Krishiv Suresh</span>
                        <h5>Wacom Tablet</h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$50</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
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

        <script src="js/homePage.js"></script>
    </body>
    
</html>


