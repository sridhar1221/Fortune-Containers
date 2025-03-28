<!DOCTYPE html>
<html lang="en">
    
<head>
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
            <a href="gallery.php">Gallery</a>
            <a href="contact.php" class="active">Contact Us</a>
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
    <div class="welcome-text">
        <main>
            <section class="contact-info">
                <h2>Address</h2>
                <p>18/2-A, Industrial Area, Behind CRI Pumps, Chinnavedampatti, Coimbatore - 641 006.</p>
                <h2>Call Us</h2>
                <p>📞 <a href="tel:(+91) 99422 18801" class="a">+91 99422 18801</a></p>
                <h2>Email Us</h2>
                <p>📧 <a href="#" class="a"> fortunepet@gmail.com</a></p>
            </section>
            <section class="contact-form">
                <form action="send_mail.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="mobile" placeholder="Your Mobile No:" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </section>


        </main>
        </div>
        
    <div class="footer">&copy; 2024 Fortune Containers. All Rights Reserved.<br>
        Designed by:<a href="https://inexpensivecoders.com/" class="a1">Inexpencive coders</a></div>
</body>
</html>
