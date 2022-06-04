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
                    <li><a class="active" href="shop.php">Shop</a></li>
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

        <section id="product" class="section-p1">
            <div class="productImage">
                <img src="img/products/p7.jpg" width="100%" id="mainImage" alt="">

                <div class="smallImages">
                    <div class="smallImageCol">
                        <img src="img/products/p7.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p7.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p7.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p7.jpg" width="100%" class="smallImage" alt="">
                    </div>
                </div>
            </div>
            <div class="productDescript">
                <h6>Cars and vehicles</h6>
                <h4>2012 Nissan Dualis</h4>
                <h2>$14,000</h2>
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>Nissan bills the Dualis as a hatchback. But what is it really? After all, in sales, it holds a healthy 23 percent of the small SUV market.
                    And, with 188mm of ground clearance, unpainted plastic body cladding and an upright stance, it’s got more in common with a typical SUV than a typical hatch.
                    But we can see where Nissan is coming from. Available in 2WD and AWD, the Dualis has the easy driveability and compact footprint of a hatch.</span>
                <p></p>
                <span>So, if you’re looking for the extra versatility of an SUV, the on-road comfort of a small wagon and the compactness of a hatch, Nissan has an answer in the Dualis.</span>
                <h6 class="seller">Sold by: Matthew Dawson</h6>
                <a href="contactSeller.html"><h6>Contact Seller</h6></a>
            </div>
        </section>

        <section id="product2" class="section-p1">
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
                    <a href="product1.html"><i class="fa-solid fa-cart-shopping"></i></a>
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
                    <a href="product2.html"><i class="fa-solid fa-cart-shopping"></i></a>
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
                    <a href="product3.html"><i class="fa-solid fa-cart-shopping"></i></a>
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
                    <a href="#product4.html"><i class="fa-solid fa-cart-shopping"></i></a>
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