<!DOCTYPE html>
<html lang="en">
<head>
<?php
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Container</title>
    <link rel="stylesheet" href="style12.css">
    <script>
        function toggleMenu() {
            document.querySelector('.nav-container').classList.toggle('active');
        }
    </script>
</head>
<body>
<div class="header">Fortune Container
    <div class="call">Call Us: <a href="tel:+91 99422 18801" class="a1">+91 99422 18801</a></div>
    <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
    </div>   
    <div class="nav-container">
        <div class="nav-bar">
            <a href="index.php">Home</a>
            <a href="About.php">About Us</a>
            <a href="Products.php">Products</a>
            <a href="gallery.php" class="active">Gallery</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>
    <div class="main-content1">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="image1.jpg">
                </div>
                <div class="slide">
                    <img src="image2.jpg">
                </div>
                <div class="slide">
                    <img src="image3.jpg">
                </div>
                <div class="slide">
                    <img src="image4.jpg">
                </div>
                <div class="slide">
                    <img src="image5.jpg">
                </div>

                <div class="slide">
                    <img src="image1.jpg">
                </div>
                <div class="slide">
                    <img src="image2.jpg">
                </div>
                <div class="slide">
                    <img src="image3.jpg">
                </div>
                <div class="slide">
                    <img src="image4.jpg">
                </div>
                <div class="slide">
                    <img src="image5.jpg">
                </div>
            </div>

        </div>
    </div>
    <div class="main-content"></div>
    <div class="gallery-text">
        <h2 class="gallery-head"><u>Gallery</u></h2>

        <div class="gallery">
            <div class="product">
                <img src="image1.jpg" alt="Product 1">
                <h3>Pet Jars</h3>
                <p>These are manufactured from high quality of plastic raw material</p>
            </div>
            <div class="product">
                <img src="image2.jpg" alt="Product 2">
                <h3>Tradition</h3>
                <p>Manufactured using high-grade raw material, 
                    these bottles are widely known for their quality and durability.</p>
            </div>
            <div class="product">
                <img src="image3.jpg" alt="Product 3">
                <h3>Containers</h3>
                <p>These bottles are also tested on various parameters so 
                    as to ensure their adherence with set industry standards and norms.</p>
            </div>
            <div class="product">
                <img src="image4.jpg" alt="Product 4">
                <h3>Sweets for My Sweet</h3>
                <p>This container can avail by our clients at market leading prices</p>
            </div>
            <div class="product">
                <img src="image2.jpg" alt="Product 2">
                <h3>Tradition</h3>
                <p>Manufactured using high-grade raw material, 
                    these bottles are widely known for their quality and durability.</p>
            </div>
            <div class="product">
                <img src="image5.jpg" alt="Product 5">
                <h3>Great Interiors</h3>
                <p>These are available in various designs and capacities, 
                    these plastic jars can also be customized as per the requirements of client.</p>
            </div>
            <div class="product">
                <img src="image4.jpg" alt="Product 4">
                <h3>Sweets for My Sweet</h3>
                <p>This container can avail by our clients at market leading prices</p>
            </div>
            <div class="product">
                <img src="image2.jpg" alt="Product 5">
                <h3>Tradition</h3>
                <p>Manufactured using high-grade raw material, these bottles 
                    are widely known for their quality and durability.</p>
            </div>
        </div>
    </div>    
        
    <div class="footer">&copy; 2024 Fortune Containers. All Rights Reserved.<br>
        Designed by:<a href="https://inexpensivecoders.com/" class="a1">Inexpencive coders</a></div>
</body>
</html>
