<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive WebSite</title>


    <link rel="stylesheet" href="Back_End.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" integrity="sha384-GLhlTQ8iFZLp3Un3+U8U8YXRaL6NHT5aP8SA9bz5l1+q1Q1g2rg5A8gsyZgO8n" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@0,100;0,200;...and-so-on&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="D:\HTML\new backand\MuseoModerno">
</head>

<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-mobile'></i>MicroDigit</a>

        <ul class="navlist">
            <li><a href="" class="active">Home</a></li>
            <li><a href="#about_ab">About</a></li>
            <li><a href="#service_src">Services</a></li>
            <li><a href="#contact_co">Contact Us</a></li>
        </ul>

        <div class="h-main">
            <a href="login.php" class="h-btn">Sign In</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
        </div>
    </header>


    <section class="hero">

        <div class="hero-text">
            <h1>MicroDigit</h1>
            <h4>Discover The Difference!</h4>
            <p>Welcome to Micro Digit, where cutting-edge technology meets convenience. Elevate your digital experience with our mobile mastery. Shop now!</p>

            <div class="hero-in">
                <div class="box">
                    <h3>Phones</h3>
                    <h5>Element</h5>
                    <a href="phone-customer-demo.php"><img src="phone.png"></a>
                </div>

                <div class="box">
                    <h3>Watches</h3>
                    <h5>Element</h5>
                    <a href="watch-customer-demo.php"><img src="main1.png"></a>
                </div>

                <div class="box">
                    <h3>Others</h3>
                    <h5>Element</h5>
                    <a href="accessorie-demo-customer.php"><img src="axce.png"></a>
                </div>
            </div>
        </div>

        <div class="hreo-img">
            <img src="phback.png">
        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>


    <section id="about_ab">
        <section class="about">
            <div class="about-container">
                <div class="about-text">
                    <h2>About Us</h2>
                    <p>Welcome to Micro Digit, your go-to destination for cutting-edge technology. At Micro Digit, we are dedicated to providing innovative solutions to enhance your digital experience. Our mission is to bring you the latest and most advanced devices, ensuring convenience and style in every interaction.</p>

                    <p>With a focus on quality and customer satisfaction, we strive to deliver products that exceed your expectations. Our team is passionate about technology and committed to staying at the forefront of the ever-evolving digital landscape.</p>

                    <p>Explore our range of phones, watches, and other devices designed to meet the demands of today's fast-paced lifestyle. Join us on a journey of discovery as we continue to push the boundaries of what technology can achieve.</p>
                    <div class="social">
                        <a href="https://www.facebook.com/micro.digit.37?mibextid=YimQGvt8cm5a3TS7"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/microdigit.sgk?igshid=YzVkODRmOTdmMw=="><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.tiktok.com/@microdigit.sgk?_t=8iE3PcJs4pe&_r=1"><i class='bx bxl-tiktok'></i></a>
                        <a href=""><i class='bx bxl-twitter'></i></a>
                        <a href=""><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>

                <div class="about-image">
                    <img src="Picsart_23-12-09_08-00-02-334.png">
                </div>
            </div>
        </section>

    </section>

    <section id="service_src">
        <section class="services">

            <div class="services-container">

                <div class="service-box">
                    <div class="service">
                        <i class='bx bx-signal-5'></i>
                        <h3>Express Shipping</h3>
                        <p>We offer fast and reliable express shipping to ensure your products reach you in no time ...Express...</p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service">
                        <i class='bx bx-headphone'></i>
                        <h3>24/7 Customer Support</h3>
                        <p>Our dedicated customer support team is available 24/7 to assist you with any queries or concerns.</p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service">
                        <i class='bx bx-refresh'></i>
                        <h3>Hassle-Free Returns</h3>
                        <p>Enjoy a hassle-free return process with our customer-friendly return policy. Your satisfaction is our priority.</p>
                    </div>
                </div>
            </div>
        </section>

    </section>


    <section id="contact_co">

        <section class="contact">
            <div class="col-lg-2 col-md-2 col-10">
                <img src="Contact_img.png" class="img-fluid">
            </div>
            <h2>Contact Us</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" onclick="whatsapp()">Send Message</button>
            </form>
        </section>

    </section>

    <script>
        function whatsapp() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            var whatsappurl = "https://wa.me/766735727?text=" +
                "Name Of Customer: " + name + "%0a" +
                "Customer Email Address: " + email + "%0a" +
                "Message: " + message + "%0a";

            window.open(whatsappurl, '_blank').focus();
        }
    </script>


    <script>
        let darkmode = document.querySelector('#darkmode');

        darkmode.onclick = () => {
            if (darkmode.classList.contains('bx-moon')) {
                darkmode.classList.replace('bx-moon', 'bx-sun');
                document.body.classList.add('color');
            } else {
                darkmode.classList.replace('bx-sun', 'bx-moon');
                document.body.classList.remove('color');
            }
        };

        let menu = document.querySelector('#menu-icon');
        let navlist = document.querySelector('.navlist');

        menu.onclick = () => {
            menu.classList.toggle('bx-x');
            navlist.classList.toggle('open');
        };

        window.onscroll = () => {
            menu.classList.remove('bx-x');
            navlist.classList.remove('open');
        };

        const sr = ScrollReveal({
            distance: '70px',
            duration: 1150,
            reset: true,
            scroll: true
        });

        sr.reveal('.hero-text', {
            delay: 200,
            origin: 'bottom'
        });
        sr.reveal('.hreo-img', {
            delay: 350,
            origin: 'top'
        });
        sr.reveal('.about', {
            delay: 350,
            origin: 'right'
        });
        sr.reveal('.services', {
            delay: 350,
            origin: 'bottom'
        });
        sr.reveal('.contact', {
            delay: 350,
            origin: 'bottom'
        });
    </script>

    <script src="D:\HTML\new backand\jquery.js"></script>

</body>

</html>