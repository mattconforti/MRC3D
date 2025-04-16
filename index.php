<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="MRC3dCreations Website">
        <meta name="keywords" content="3d printing, tech, gaming, 3d models">
        <meta name="author" content="Matt Conforti">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MRC3D - Home</title>
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/site.webmanifest">
        <!-- / FAVICON -->
        <!-- SWIPER JS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <!-- / SWIPER JS -->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php
            // include the header
            include('includes/header.php');
        ?>
        <!-- / HEADER -->
        <!-- CONTENT AREA -->
        <h1 id="carousel_label">What's New / <span style="color:red">Hot</span> ?</h1>
        <!-- SWIPER CONTAINER -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div id="slide1" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Darth_Buddha.jpg" alt="Product Photo">
                </div>
                <div id="slide2" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Thing_Hand.jpg" alt="Product Photo">
                </div>
                <div id="slide3" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Tanjiros_Earrings.jpg" alt="Product Photo">
                </div>
                <div id="slide4" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Custom_Trophy.jpg" alt="Product Photo">
                </div>
                <div id="slide5" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Roses_With_Stand.jpg" alt="Product Photo">
                </div>
                <div id="slide6" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Lizard_Baby_Dragon.jpg" alt="Product Photo">
                </div>
                <div id="slide7" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/Christmas_Tree.jpg" alt="Product Photo">
                </div>
                <div id="slide8" class="swiper-slide">
                    <img class="product_img" src="images/product_photos/LOVE_Sign.jpg" alt="Product Photo">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- / SWIPER CONTAINER -->
        <!-- MORE CONTENT HERE -->
                <!--
                PRODUCT REVIEWS AREA
                HOW ITS MADE AREA (MAYBE IN THE ABOUT PAGE??) lil photo preview on landing page? 3 photo view see below
                GOAL FOR THIS LANDING PAGE...
                Small lil intro & what we do...  I had full list somewhere idk where..
                the possibilities of this technology are limitless!
                show reviews, show some cool products, 
                quick 1-2-3 photo side by side view how products are made (going from 3d model to printer to finished product) 
                so people understand the service & the creativity aspect of it!
                should get a good idea of what this site is about without delving into all the detail of all of it!!!
                -->
        <!-- / CONTENT AREA -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>
    </body>
</html>
