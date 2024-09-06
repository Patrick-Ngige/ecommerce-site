<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopify</title>

    <link rel="stylesheet" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?familyPoppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>


    <div class="overlay" data-overlay></div>


    <!-- ==================
            HEADER
    ================== -->


    <header>

        <!-- top header -->

        <div class="header-top">
            <div class="container">
                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - Ksh. 7,000
                    </p>
                </div>

                <div class="header-top-actions">
                    <select name="currency">
                        <option value="ksh">Ksh. </option>
                        <option value="usd">USD &dollar;</option>
                        <option value="eur">EUR &euro;</option>
                    </select>

                    <select name="language">
                        <option value="en-US">English</option>
                        <option value="fr">Fran&ccedil;ais</option>
                        <option value="es-ES">Espa&ntilde;ol</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- main header  -->

        <div class="header-main">
            <div class="container">
                <a href="/" class="header-logo">
                    <img src="./assets/images/logo/logo.svg" alt="Logo" width="120" height="36">
                </a>

                <!-- search container  -->

                <div class="header-search-container">
                    <input type="search" name="search" class="search-field" placeholder="Enter your product name... ">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>

                <!-- user actions  -->

                <div class="header-user-actions">

                    <button class="action-btn">
                        <a href="login.php"><ion-icon name="person-outline"></ion-icon></a>
                    </button>

                    <button class="action-btn">
                        <a href="cart.php"><ion-icon name="bag-handle-outline"></ion-icon></a>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>
        </div>

        <!-- desktop navigation menu  -->

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <!-- menu categories  -->
                    <li class="menu-category">
                        <a href="/" class="menu-title">Home</a>
                    </li>

                    <!-- menu categories  -->
                    <li class="menu-category">
                        <a href="products.php" class="menu-title">Categories</a>

                        <!-- dropdown panel s -->
                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection"
                                            width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Men's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sports</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Jacket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sunglasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/mens-banner.jpg" alt="Mens's fashion" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Women's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Perfume</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cosmetics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bags</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-2.jpg" alt="electronics collection"
                                            width="250" height="119">
                                    </a>
                                </li>

                            </ul>


                        </div>

                    </li>

                    <!-- ===  BLOGS ===  -->

                    <!--Blogs menu categories  -->
                    <li class="menu-category">
                        <a href="http://127.0.0.1:5500/index.php#blogs" class="menu-title">Blogs</a>
                    </li>

                    <li class="menu-category">
                        <a href="about-us.php" class="menu-title">About Us</a>
                    </li>

                    <li class="menu-category">
                        <a href="contact-us.php" class="menu-title">Contact Us</a>
                    </li>



                </ul>

            </div>

        </nav>

        <!-- mobile bottom navigation  -->
        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <a href="cart.php"><ion-icon name="bag-handle-outline"></ion-icon></a>
                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>
                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <!-- mobile navigation menu  -->
        <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>

            <div class="menu-top">

                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>

            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <!-- men's category  -->
                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="submenu-category-list " data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shirt</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shorts & Jeans</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Safety Shoes</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Wallet</a>
                        </li>

                    </ul>

                </li>

                <!-- women's category  -->
                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dress & Frock</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Makeup Kit</a>
                        </li>

                    </ul>

                </li>

                <!-- jewellery category  -->
                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Couple Rings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Bracelets</a>
                        </li>

                    </ul>

                </li>

                <!-- perfume category  -->
                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Clothes Perfume</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Deodorant</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Flower Fragrance</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Air Freshner</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <!-- menu bottom  -->
            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <!-- language selection  -->
                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                        </ul>

                    </li>

                    <!-- currency selection  -->
                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Ksh.</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Euro &euro;</a>
                            </li>

                        </ul>

                    </li>



                </ul>

                <!-- social links  -->
                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>



    <!-- ==================
            MAIN
    ================== -->

    <main>

        <!-- ==================
            PRODUCT
    ================== -->

        <style>
            .orders-items {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .main-container {
                width: 90%;
                display: flex;
                flex-direction: row;
                align-items: center;
                align-content: center;
                justify-content: space-between;
                border-bottom: 2px solid hsl(0, 0%, 93%);
                padding: 10px 0;
                margin-left: 5%;
                margin-bottom: 30px;
            }

            .p-container {
                display: flex;
                flex-direction: row;
                width: 50%;
                column-gap: 20px;
            }

            .product-img {
                border: 1px solid hsl(0, 0%, 93%);
                border-radius: 5px;
            }

            .product-info {
                color: hsl(0, 0%, 13%);
                width: 50%;
                margin-left: 0;
            }

            .p-info {
                margin-bottom: 10px;

            }

            .p-price {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                gap: 30px;
                width: 100%;
                align-items: center;
                align-content: center;
                color: hsl(0, 0%, 47%);
                /* font-weight: 600; */
                font-size: 0.875rem;
            }

            .prd-size, .p-quantity, .date, .payment {
                font-size: 0.875rem;
            }

            .p-num {
                width: 20%;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 5px;
            }

            .order-status {
                width: 8px;
                height: 8px;
                background-color: rgb(14, 174, 33);
                border-radius: 50%;
            }
            .order-status-text {
                font-size: 0.875rem;
                font-weight: 500;
                color: hsl(0, 0%, 47%);
            }
            .track-btn {
                width: 20%;
                margin-right: 0;
                cursor: pointer;
            }
            .track-btn p{
                width: fit-content;
                padding: 5px;
                border: 1.5px solid hsl(0, 0%, 90%);
                border-radius: 5px;
                font-size: 0.875rem;
                font-weight: 600;
                color: hsl(0, 0%, 47%) ;
            }


        </style>

        <div class="product-container" style="margin: 20px 0px 50px 0px;">
            <div class="container-orders">

                <!-- =====================
                    PRODUCT LIST 
            ====================== -->

                <div class="orders-items">

                    <h2 class="title" style="width: 90%; margin-left: 5%;margin-bottom: 20;">YOUR <span style="color: hsl(353, 100%, 78%);"> ORDERS</span></h2>

                    <div class="main-container">

                        <div class="p-container">

                            <div class="product-img">
                                <img src="./assets/images/products/clothes-1.jpg" width="100" height="100" alt="">
                            </div>
    
                            <div class="product-info">
    
                                <div class="p-info">
                                    <p>Women Round Neck Sweater</p>
                                </div>
    
                                <div class="p-price">
                                    <p>Ksh. 2,000.00</p>
    
                                    <div class="p-quantity">
                                        Quantity: 1
                                    </div>
    
                                    <div class="prd-size">
                                        Size: M 
                                    </div>
    
                                </div>
    
                                <div class="date">
                                    Date: <span style="color: hsl(0, 0%, 47%);"> Thur 22nd Aug,2024 </span>
                                </div>
    
                                <div class="payment">
                                    Payment: <span style="color: hsl(0, 0%, 47%);"> POD </span>
                                </div>
    
                            </div>

                        </div>
                        

                        <div class="p-num">
                            <div class="order-status">

                            </div>

                            <div class="order-status-text">
                                <p>Order Placed</p>
                            </div>
                        </div>

                        <div class="track-btn">
                            <p>Track Order</p>
                        </div>

                    </div>

                    <div class="main-container">

                        <div class="p-container">

                            <div class="product-img">
                                <img src="./assets/images/products/clothes-3.jpg" width="100" height="100" alt="">
                            </div>
    
                            <div class="product-info">
    
                                <div class="p-info">
                                    <p>Women Round Neck Sweater</p>
                                </div>
    
                                <div class="p-price">
                                    <p>Ksh. 2,000.00</p>
    
                                    <div class="p-quantity">
                                        Quantity: 1
                                    </div>
    
                                    <div class="prd-size">
                                        Size: M 
                                    </div>
    
                                </div>
    
                                <div class="date">
                                    Date: <span style="color: hsl(0, 0%, 47%);"> Thur 22nd Aug,2024 </span>
                                </div>
    
                                <div class="payment">
                                    Payment: <span style="color: hsl(0, 0%, 47%);"> POD </span>
                                </div>
    
                            </div>

                        </div>
                        

                        <div class="p-num">
                            <div class="order-status">

                            </div>

                            <div class="order-status-text">
                                <p>Order Placed</p>
                            </div>
                        </div>

                        <div class="track-btn">
                            <p>Track Order</p>
                        </div>

                    </div>

                    <div class="main-container">

                        <div class="p-container">

                            <div class="product-img">
                                <img src="./assets/images/products/clothes-2.jpg" width="100" height="100" alt="">
                            </div>
    
                            <div class="product-info">
    
                                <div class="p-info">
                                    <p>Women Round Neck Sweater</p>
                                </div>
    
                                <div class="p-price">
                                    <p>Ksh. 2,000.00</p>
    
                                    <div class="p-quantity">
                                        Quantity: 1
                                    </div>
    
                                    <div class="prd-size">
                                        Size: M 
                                    </div>
    
                                </div>
    
                                <div class="date">
                                    Date: <span style="color: hsl(0, 0%, 47%);"> Thur 22nd Aug,2024 </span>
                                </div>
    
                                <div class="payment">
                                    Payment: <span style="color: hsl(0, 0%, 47%);"> POD </span>
                                </div>
    
                            </div>

                        </div>
                        

                        <div class="p-num">
                            <div class="order-status">

                            </div>

                            <div class="order-status-text">
                                <p>Order Placed</p>
                            </div>
                        </div>

                        <div class="track-btn">
                            <p>Track Order</p>
                        </div>

                    </div>

                    


                </div>

            </div>

        </div>

    </main>


    <!-- =================
                Footer
        ================= -->

    <footer>

        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Fashion</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Electronics</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cosmetic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Health</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Price Drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New Products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best Sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact Us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and Conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About Us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure Payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Price Drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New Products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best Sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact Us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            Room D35 Dubai Mecharnt,
                            Ronald Ngala Avenue, Nairobi, Kenya
                        </address>

                    </li>

                    <li class="footer-nav-item flex">

                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+254700155251" class="footer-nav-link"> +254 700 155 251</a>

                    </li>

                    <li class="footer-nav-item flex">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:shopify@yahoo.com" class="footer-nav-link">shopify@yahoo.com</a>

                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>

                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Shopify</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>



    <script src="./assets/js/script.js"></script>

    <!-- ionicon link  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script nonmodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>