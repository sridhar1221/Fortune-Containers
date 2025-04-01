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

        function generateCaptcha() {
            let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("captcha-text").innerText = captcha;
            document.getElementById("captcha-value").value = captcha;
        }

        function validateCaptcha(event) {
            let enteredCaptcha = document.getElementById("captcha-input").value;
            let actualCaptcha = document.getElementById("captcha-value").value;
            if (enteredCaptcha !== actualCaptcha) {
                alert("Incorrect CAPTCHA. Please try again.");
                event.preventDefault();
                generateCaptcha();
            } else {
                event.preventDefault();
                alert("CAPTCHA verified successfully! Your message has been sent.");
                document.querySelector(".contact-form form").submit();
            }
        }

        window.onload = generateCaptcha;
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
                <h2><u>Address</u></h2>
                <p>18/2-A, Industrial Area, <br>Behind CRI Pumps, <br>Chinnavedampatti,<br> Coimbatore - 641 006.</p>
                <h2><u>Call Us</u></h2>
                <p>📞 <a href="tel:(+91) 99422 18801" class="a">+91 99422 18801</a></p>
                <h2><u>Email Us</u></h2>
                <p>📧 <a href="#" class="a"> fortunepet@gmail.com</a></p>
            </section>
            <section class="contact-form">
                <form action="send_mail.php" method="POST" onsubmit="validateCaptcha(event)">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="mobile" placeholder="Your Mobile No:" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    
                    <!-- CAPTCHA Section -->
                    <label for="captcha">Enter the CAPTCHA:</label>
                    <div id="captcha-text" style="font-size: 20px; font-weight: bold; margin-bottom: 10px;"></div>
                    <input type="text" id="captcha-input" placeholder="Enter CAPTCHA" required>
                    <input type="hidden" id="captcha-value">
                    
                    <button type="submit">Send Message</button>
                </form>
            </section>


        </main>
        </div>
        
    <div class="footer">&copy; 2024 Fortune Containers. All Rights Reserved.<br>
        Designed by: <a href="https://inexpensivecoders.com/" class="a1">Inexpensive Coders</a>
    </div>
</body>
</html>