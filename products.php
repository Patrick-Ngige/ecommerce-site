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
            NOTIFICATION TOAST
    ================== -->

    <div class="notification-toast" data-toast>
        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
        </div>

        <div class="toast-detail">
            <p class="toast-message">
                Someone in new just bought
            </p>

            <p class="toast-title">
                Rose Gold Earrings
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">2 minutes</time> ago
            </p>
        </div>

    </div>


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
                        For This Week Orders Above - Ksh. 7,000
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
                        <ion-icon name="person-outline"></ion-icon>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <a href="cart.html"><ion-icon name="bag-handle-outline"></ion-icon></a>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>
        </div>

        <!-- desktop navigation menu  -->

        <nav class="desktop-navigation-menu" style="margin-bottom: 20px;">

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
                        <a href="index.php#blogs" class="menu-title">Blogs</a>
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
                <a href="cart.html"><ion-icon name="bag-handle-outline"></ion-icon></a>
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

    <?php
                require 'vendor/autoload.php';

                use GuzzleHttp\Client;

                $apiEndpoint = 'https://fakestoreapi.com/products/';

                $client = new Client();

                try {
                    $response = $client->request('GET', $apiEndpoint);
                    $data = json_decode($response->getBody(), true);

                    // maximum number of products to display
                    $maxProducts = 16;

                    $uniqueProductsByCategory = [];

                    foreach ($data as $product) {
                        $category = $product['category'];
                        $rating = $product['rating']['rate'];
                
                        // Only add the product if it's not already in the array and has a rating > 4.5
                        if (!isset($uniqueProductsByCategory[$category]) && $rating > 4.5) {
                            $uniqueProductsByCategory[$category] = $product;
                        }
                    }
                
                    // Set the maximum number of products to display
                    // $maxProducts = count($uniqueProductsByCategory);
    

                    ?>
        <!-- ==================
            PRODUCT
    ================== -->

        <div class="product-container">
            <div class="container">

                <!-- ==================
                    SIDEBAR
            ================== -->

                <div class="sidebar has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                        <div class="sidebar-top">

                            <h2 class="sidebar-">Category</h2>

                            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>

                        </div>

                        <ul class="sidebar-menu-category-list">

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                                            class="menu-title-img">

                                        <p class="menu-title">Clothes</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">

                                        <a href="#" class="sidebar-submenu-title">

                                            <p class="product-name"> shirt</p>

                                            <data value="300" class="stock" title="Available Stock">300</data>

                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">

                                        <a href="#" class="sidebar-submenu-title">

                                            <p class="product-name">Shorts & Jeans</p>

                                            <data value="60" class="stock" title="Available Stock">60</data>

                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">

                                        <a href="#" class="sidebar-submenu-title">

                                            <p class="product-name">Jacket</p>

                                            <data value="50" class="stock" title="Available Stock">50</data>

                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">

                                        <a href="#" class="sidebar-submenu-title">

                                            <p class="product-name">Dress & Frock</p>

                                            <data value="87" class="stock" title="Available Stock">87</data>

                                        </a>

                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/shoes.svg" alt="clothes" width="20" height="20"
                                            class="menu-title-img">

                                        <p class="menu-title">Footwear</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sports</p>
                                            <data value="45" class="stock" title="Available Stock">45</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Formal</p>
                                            <data value="75" class="stock" title="Available Stock">75</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Casual</p>
                                            <data value="35" class="stock" title="Available Stock">35</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Safety Shoes</p>
                                            <data value="26" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/jewelry.svg" alt="clothes" width="20"
                                            height="20" class="menu-title-img">

                                        <p class="menu-title">Jewelry</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Earrings</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Couple Rings</p>
                                            <data value="73" class="stock" title="Available Stock">73</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Necklace</p>
                                            <data value="61" class="stock" title="Available Stock">61</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/perfume.svg" alt="clothes" width="20"
                                            height="20" class="menu-title-img">

                                        <p class="menu-title">Perfume</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Clothes Perfume</p>
                                            <data value="12" class="stock" title="Available Stock">12 pcs</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Deodorant</p>
                                            <data value="60" class="stock" title="Available Stock">60 pcs</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Jacket</p>
                                            <data value="50" class="stock" title="Available Stock">50 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Dress & Frock</p>
                                            <data value="87" class="stock" title="Available Stock">87 pcs</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/cosmetics.svg" alt="clothes" width="20"
                                            height="20" class="menu-title-img">

                                        <p class="menu-title">Cosmetics</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shampoo</p>
                                            <data value="68" class="stock" title="Available Stock">68</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sunscreen</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Body Wash</p>
                                            <data value="79" class="stock" title="Available Stock">79</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Makeup Kit</p>
                                            <data value="23" class="stock" title="Available Stock">23</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/glasses.svg" alt="clothes" width="20"
                                            height="20" class="menu-title-img">

                                        <p class="menu-title">Glasses</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sunglasses</p>
                                            <data value="50" class="stock" title="Available Stock">50</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Lenses</p>
                                            <data value="48" class="stock" title="Available Stock">48</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">

                                        <img src="./assets/images/icons/bag.svg" alt="clothes" width="20" height="20"
                                            class="menu-title-img">

                                        <p class="menu-title">Bags</p>

                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion="">
                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shopping Bag</p>
                                            <data value="62" class="stock" title="Available Stock">62</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Gym Backpack</p>
                                            <data value="35" class="stock" title="Available Stock">35</data>
                                        </a>

                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Purse</p>
                                            <data value="80" class="stock" title="Available Stock">80</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Wallet</p>
                                            <data value="75" class="stock" title="Available Stock">75</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">Best Sellers</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">

                                 <?php foreach ($uniqueProductsByCategory as $product) { ?>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" width="75"
                                            height="75" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title"><?php echo $product['title'] ?></h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>Ksh. 650.00</del>
                                            <p class="price">$<?php echo $product['price'] ?></p>
                                        </div>

                                    </div>

                                </div>


                                <?php } ?>
                            </div>

                            
                        </div>

                        

                    </div>

                </div>



                <!-- =====================
                    PRODUCT GRID
            ====================== -->

               

                    <div class="product-main">

                        <h2 class="title"><span style="color: hsl(0, 0%, 47%);">ALL</span> COLLECTIONS</h2>

                        <div class="product-grid">

                            <?php for ($i = 0; $i < min($maxProducts, count($data)); $i++) { ?>

                                <div class="showcase">

                                    <div class="showcase-banner">

                                        <img src="<?php echo $data[$i]['image'] ?>" alt="<?php echo $data[$i]['title']; ?>"
                                            width="300" height="300" class="product-img default">

                                        <img src="<?php echo $data[$i]['image'] ?>" alt="<?php echo $data[$i]['title']; ?>"
                                            width="300" height="300" class="product-img hover">

                                        <p class="showcase-badge"><?php echo $data[$i]['rating']['rate']; ?></p>

                                        <div class="showcase-actions">

                                            <button class="btn-action">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </button>

                                            <button class="btn-action">
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </button>

                                            <button class="btn-action">
                                                <ion-icon name="repeat-outline"></ion-icon>
                                            </button>

                                            <button class="btn-action">
                                                <ion-icon name="bag-add-outline">
                                                    <ionicon>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="showcase-content">

                                        <a href="#" class="showcase-category"> <?php echo $data[$i]['category'] ?></a>

                                        <a href="#">
                                            <h3 class="showcase-title"> <?php echo $data[$i]['title']; ?>
                                            </h3>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <p class="price">$<?php echo $data[$i]['price']; ?>
                                                <!-- Ksh. 6,240.00 -->
                                            </p>
                                            <del></del>
                                        </div>

                                    </div>

                                </div>

                                <?php } ?>

                        </div>

                    </div>

            </div>

        </div>


        </div>
        <!-- ===================
                   BLOGS
            ================= -->

        <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-1.jpg"
                                alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Fashion</a>

                            <a href="#">
                                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Patrick</cite> / <time datetime="2024-08-12">August 12, 2024</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-2.jpg"
                                alt="Curbside Fashion Trends: How to Win the Pickup Battle" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Clothes</a>

                            <a href="#">
                                <h3 class="blog-title">Curbside Fashion Trends: How to Win the Pickup Battle</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Joseah</cite> / <time datetime="2024-07-22">July 22, 2024</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-3.jpg"
                                alt="EBT Vendors: Claim Your Share of SNAP Online Revenue" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Shoes</a>

                            <a href="#">
                                <h3 class="blog-title">EBT Vendors: Claim Your Share of SNAP Online Revenue</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Charles</cite> / <time datetime="2024-08-01">August 1, 2024</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-4.jpg"
                                alt="Curbside Fashion Trend: How to Win the Pickup Battle" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Electronics</a>

                            <a href="#">
                                <h3 class="blog-title">Curbside Fashion Trend: How to Win the Pickup Battle</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Jonah</cite> / <time datetime="2024-08-09">August 9, 2024</time>
                            </p>

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

        <div class="footer-category">

            <div class="container">

                <h2 class="footer-category-title">Brand Directory</h2>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Fashion: </h3>

                    <a href="#" class="footer-category-link">T-shirt</a>
                    <a href="#" class="footer-category-link">Shirt</a>
                    <a href="#" class="footer-category-link">Shorts & Jeans</a>
                    <a href="#" class="footer-category-link">Dress & Frock</a>
                    <a href="#" class="footer-category-link">Innerwear</a>
                    <a href="#" class="footer-category-link">Hosiery</a>

                </div>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Footwear: </h3>

                    <a href="#" class="footer-category-link">sport</a>
                    <a href="#" class="footer-category-link">formal</a>
                    <a href="#" class="footer-category-link">Boots</a>
                    <a href="#" class="footer-category-link">Casual</a>
                    <a href="#" class="footer-category-link">Cowboy Shoes</a>
                    <a href="#" class="footer-category-link">Safety Shoes</a>
                    <a href="#" class="footer-category-link">Party Wear Shoes</a>
                    <a href="#" class="footer-category-link">Branded</a>
                    <a href="#" class="footer-category-link">Firstcopy</a>
                    <a href="#" class="footer-category-link">Long Shoes</a>

                </div>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Jewellery: </h3>

                    <a href="#" class="footer-category-link">Necklace</a>
                    <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple Rings</a>
                    <a href="#" class="footer-category-link">Pendants</a>
                    <a href="#" class="footer-category-link">Crystal</a>
                    <a href="#" class="footer-category-link">Bangles</a>
                    <a href="#" class="footer-category-link">Bracelets</a>
                    <a href="#" class="footer-category-link">Nosepin</a>
                    <a href="#" class="footer-category-link">Chain</a>
                    <a href="#" class="footer-category-link">Couple Rings</a>

                </div>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Cosmetics: </h3>

                    <a href="#" class="footer-category-link">Shampoo</a>
                    <a href="#" class="footer-category-link">Bodywash</a>
                    <a href="#" class="footer-category-link">Facewash</a>
                    <a href="#" class="footer-category-link">Makeup Kit</a>
                    <a href="#" class="footer-category-link">Liner</a>
                    <a href="#" class="footer-category-link">Lipstick</a>
                    <a href="#" class="footer-category-link">Perfume</a>
                    <a href="#" class="footer-category-link">Body Wash</a>
                    <a href="#" class="footer-category-link">Scrub</a>
                    <a href="#" class="footer-category-link">Hair Gel</a>
                    <a href="#" class="footer-category-link">Hair Colors</a>
                    <a href="#" class="footer-category-link">Hair Dye</a>
                    <a href="#" class="footer-category-link">Sunscreen</a>
                    <a href="#" class="footer-category-link">Skin Lotion</a>

                </div>

            </div>

        </div>

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

    

    <?php
                } catch (Exception $e) {
                    echo "Error fetching products: " . $e->getMessage();
                }
                ?>


</body>

</html>