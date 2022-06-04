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
                <img src="img/products/p2.jpg" width="100%" id="mainImage" alt="">

                <div class="smallImages">
                    <div class="smallImageCol">
                        <img src="img/products/p2.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p2.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p2.jpg" width="100%" class="smallImage" alt="">
                    </div>
                    <div class="smallImageCol">
                        <img src="img/products/p2.jpg" width="100%" class="smallImage" alt="">
                    </div>
                </div>
            </div>
            <div class="productDescript">
                <h6>Vehicles</h6>
                <h4>Yamaha FZ6R - Lams Approved</h4>
                <h2>$6,000</h2>
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>A rider in the market for a practical 600cc bike doesn’t have to
                    compromise performance or style to get value. The FZ6R is a great
                    combination of performance, handling, and exciting sport bike style,
                    but also with a low seat height that’s both adjustable to fit a wider
                    variety of riders and also narrower where it counts to make it even easier
                    to put both feet on the ground.</span>
                <p></p>
                <span>The engine delivers smooth power just the way today’s rider needs it,
                    providing brisk acceleration with plenty of torque that makes it a
                    pleasure to get around town, with plenty in reserve for when you want
                    more. The FZ6R is fuel injected and tuned for outstanding low- to
                    mid-rpm engine performance.</span>
                <p></p>
                <span>Even if your primary goal is commuting to school or work, you want to
                    be able to get out and have fun riding some twisty back roads. The
                    diamond-shaped frame, made of high-tensile steel pipes using the
                    engine as a structural member of the chassis, becomes the foundation
                    for handling performance. It’s designed to provide the right rigidity
                    balance to contribute to smooth cornering performance.</span>
                <h6 class="seller" style="margin-bottom: 10px;">Sold by: Melvin Ding</h6>
                <a href="contactSeller.html"><h6>Contact Seller</h6></a>
            </div>
        </section>

        <center id="sign-up">
            <h2 style="margin-bottom: 30px; padding-left: 50px;">Product Review</h2>
            <video width="60%" controls src="img/product2vid.mp4"></video>
        </center>

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
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
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
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
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