<?php //echo get_template_directory_uri();

// bloginfo('template_directory');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b1e4efcbad.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo" /></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="/shop.html">Shop</a></li>
                <li><a href="/blog.html">Blog</a></li>
                <li><a href="/about.html">About</a></li>
                <li><a href="/contact.html">Contact</a></li>
                <li>
                    <a href="/cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <div id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On All Products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </div>

    <div id="feature" class="section-p1">
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f1.png" />
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f2.png" />
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f3.png" />
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f4.png" />
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f5.png" />
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="<?php bloginfo('template_directory') ?>/img/features/f6.png" />
            <h6>F24/7 Support</h6>
        </div>
    </div>

    <div id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f1.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f2.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f3.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f4.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f5.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f6.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f7.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/f8.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </div>

    <div id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span> 70% Off </span>- All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </div>
    <div id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n1.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n2.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n3.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n4.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n5.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n6.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n7.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="<?php bloginfo('template_directory') ?>/img/products/n8.jpg" />
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="/" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </div>

    <div id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </div>
    <div id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>FOOTWEAR COLLECTION</h2>
            <h3>spring/summer 2023</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </div>
    <div id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>
                Get E-mail updates about our shop and <span>Special Offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail Address" />
            <button class="normal">Sign Up</button>
        </div>
    </div>
    <footer class="section-p1">
        <div class="col">
            <img src="<?php bloginfo('template_directory') ?>/img/logo.png" />
            <h4>Contact</h4>
            <p>
                <strong>Address: </strong> 562 Wellington Road, Street 32, San
                Francisco
            </p>
            <p><strong>Phone: </strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="/">About us</a>
            <a href="/">Delivery Information</a>
            <a href="/">Privacy Policy</a>
            <a href="/">Terms & Coditions</a>
            <a href="/">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="/">Sign In</a>
            <a href="/">View Cart</a>
            <a href="/">My Wishlist</a>
            <a href="/">Track My Order</a>
            <a href="/">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" />
                <img src="img/pay/play.jpg" />
            </div>
            <p>Secured Payment Gateways</p>
            <img src="<?php bloginfo('template_directory') ?>/img/pay/pay.png" />
        </div>
    </footer>
    <div class="copyright">
        <p>&copy; 2023, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
    <script src="app.js"></script>
</body>

</html>