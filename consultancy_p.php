<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I D Manpower Management Services </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="styles.css">
<script defer src="script.js"></script>
    <style>
    
      /* Reset and Basic Styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color:rgb(68, 60, 208);
    text-align: center;
}

/* Navigation Bar */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:rgb(14, 10, 10);
    color: white;
    padding: 15px 30px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
}

.logo img {
    height: 50px;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
}
/* Style for active menu item */
nav ul li a.active {
    background-color:rgb(24, 24, 174); /* Change this to your desired active color */
    padding: 8px 16px;
    border-radius: 5px;
    transition: 0.2s;
}

/* Hamburger Menu */
.menu-toggle {
    display: none;
    font-size: 2em;
    cursor: pointer;
}

/* Home Section */
/* Home Section */
#home {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding-left: 10%;
    text-align: left;
    height: 100vh;
    background: url('Business-Consulting-Image.jpg') no-repeat center right/cover;
    position: relative;
    width: 100%;
    padding-top: 50px; /* Increased top gap */
}

/* Home Container */
.home-container {
    max-width: 500px;
}

/* Heading */
.home-text h1 {
    font-size: 4.5em;
    color: white;
    text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}

.home-text p {
    font-size: 1.5em;
    margin-bottom: 20px;
    color: blue;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

/* Join Us Button */
.join-btn {
    padding: 14px 28px;
    background: linear-gradient(to right, #ff512f, #dd2476);
    color: white;
    font-weight: bold;
    border: none;
    font-size: 1.3em;
    cursor: pointer;
    border-radius: 12px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}
.join-btn:hover {
    background: linear-gradient(to right, #dd2476, #ff512f);
    transform: scale(1.08);
}

/* Social Media Icons */
.social-icons {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

/* Default Icon Styling */
.social-icons a {
    font-size: 2em;
    color: blue; /* Default black */
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

/* Hover Effect */
.social-icons a:hover {
    color: blue; /* Turns blue on hover */
    transform: scale(1.2) rotate(5deg);
}

/* Vacancy Section */
.vacancy-container {
    text-align: left;
    width: 100%;
    margin-top: 30px;
}

.vacancy-container h1 {
    font-size: 2em;
    color: rgb(23, 54, 90);
    margin-bottom: 10px; 
}

marquee {
    background-color: rgba(0, 0, 0, 0.1);
    padding: 15px;
    font-size: 1.4em;
    font-weight: bold;
    color:blue;
    border-radius: 10px;
    width: 100%;
}
marquee a {
    text-decoration: none;
    color: blue;
    font-weight: bold;
}
marquee a:hover {
    color: rgb(230, 57, 23);
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    #home {
        padding-left: 5%;
        justify-content: flex-start;
        height: auto;
        padding-top: 100px; /* Keeping top gap */
        text-align: center;
        align-items: center;
    }

    .home-container {
        max-width: 90%;
    }

    .home-text h1 {
        font-size: 3.5em;
    }

    .home-text p {
        font-size: 1.2em;
    }

    .social-icons {
        justify-content: center;
        margin-top: 20px;
    }

    .social-icons a {
        font-size: 1.8em;
    }
}

/* About Us Section */
/* About Us Section */
#about {
    text-align: center;
    background: #f9f9f9;
    min-height: 100vh; /* Full screen height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 40px 0;
}

#about h2 {
    font-size: 2em;
    font-weight: bold;
    color: #dd2476;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

/* Container for Image and Text */
.about-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 85%;
    max-width: 1100px;
    gap: 15px; /* Small gap between image and text */
}

/* Image Styling */
.about-container img {
    width: 35%;
    max-width: 350px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.about-container img:hover {
    transform: scale(1.05);
}

/* Text Styling */
.about-text {
    width: 60%;
    font-size: 1.1em;
    color: #333;
    font-weight: 500;
    line-height: 1.5;
    text-align: justify;
    background: rgba(255, 255, 255, 0.9);
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
}

/* Responsive Design */
@media screen and (max-width: 1024px) {
    .about-container {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }

    .about-container img {
        width: 50%;
        max-width: 280px;
    }

    .about-text {
        width: 90%;
        font-size: 1em;
        padding: 12px;
    }
}

@media screen and (max-width: 768px) {
    #about {
        padding: 20px 5%;
    }

    #about h2 {
        font-size: 1.8em;
    }

    .about-container img {
        width: 60%;
        max-width: 250px;
    }

    .about-text {
        width: 100%;
        font-size: 0.95em;
        padding: 10px;
    }
}


/* Responsive Styles */
@media screen and (max-width: 768px) {
    nav ul {
        display: none;
        flex-direction: column;
        background: #1a4483;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        text-align: center;
    }

/
    nav ul li {
        padding: 15px 0;
    }

    .menu-toggle {
        display: block;
    }

    .show-nav {
        display: flex;
    }

    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-container img {
        width: 90%;
    }

    .home-content h1,
    .home-content p {
        font-size: 18px;
    }
}


/* Services Section */
/* Services Section */
#services {
    padding: 50px 20px;
    background: rgba(0, 0, 0, 0);
    text-align: center;
}

/* Service Container */
.service-container {
    background-image: url('background_image_ragistration_form.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}


/* Service Cards */
.service-card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    width: 350px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.service-card:hover {
    transform: scale(1.2);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

/* Service Card Images */
.service-card img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

/* Service Titles (h3) */
.service-card h3 {
    font-size: 1.5em;
    color: #333;
    margin-top: 15px;
    font-weight: bold;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .service-container {
        flex-direction: column;
        align-items: center;
    }

    .service-card {
        width: 90%;
    }
}


/* Clients Section */
#clients {
            padding: 50px 20px;
            background: white;
        }

        .clients-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .clients-text {
            font-size: 1.5em;
            color:rgb(5, 14, 35);
            margin-bottom: 20px;
        }

        .client-logos {
          
            display: flex;
            flex-wrap: nowrap; 
            overflow: hidden;
            color:white; 
            padding: 10px 0;
        }

        .client-logos marquee {
            width: 100%;
        }

        .client-logos img {
            width: 140px;
            height: auto;
            margin: 0 15px;
        }

        /* Responsive Styling */
        @media screen and (max-width: 768px) {
            .clients-text {
                font-size: 1.2em;
            }

            .client-logos img {
                width: 100px;
            }
        }


/* Hiring Section */
#hiring {
    padding: 50px 20px;
    background: white;
}

.stats-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 50px 20px;
        background: #f8f9fa;
    }
    .stat-box {
        background: linear-gradient(135deg,rgb(50, 76, 192),rgb(39, 108, 212));
        color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s;
        text-align: center;
        width: 250px;
    }
    .stat-box:hover {
        transform: scale(1.1);
    }
    .stat-box h2 {
        font-size: 2.5em;
        margin: 0;
    }
    .stat-box p {
        font-size: 1.2em;
        margin: 5px 0 0;
    }
    @media (max-width: 768px) {
        .stats-section {
            flex-direction: column;
            align-items: center;
        }
        .stat-box {
            width: 90%;
        }
    }  

/* 
     last page */
    
     body {
      background-color: #0A1931;
      color: white;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
    }

    /* Info Section */
    .info-section {
      padding: 40px 0;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .main-content,
    .quick-links,
    .services,
    .contact-info {
      flex: 1 1 250px;
    }

    h2 {
      font-size: 22px;
      color: #FFC107;
      margin-bottom: 15px;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      margin-bottom: 10px;
      font-size: 18px;
    }

    ul li a {
      color: #FFC107;
      text-decoration: none;
      transition: 0.3s;
      font-weight: bold;
    }

    ul li a:hover {
      color: #FFD700;
      text-decoration: underline;
    }

    .contact-info ul li {
      font-weight: bold;
    }

    /* Footer Styling */
    footer {
      background: linear-gradient(to right, #111, #2c3e50);
      color: white;
      text-align:center;
      flex-direction:end;
      padding: 20px 0;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .footer-container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    .footer-container p {
      font-size: 16px;
      /* opacity: 0.9; */
    }

    .social-icons {
      margin-top: 12px;
    }

    .social-icons a {
      color: #00bfff;
      font-size: 28px;
      margin: 0 12px;
      display: inline-block;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-icons a:hover {
      transform: scale(1.1);
      color: #ff6600;
    }

    @media (max-width: 1024px), (max-width: 768px) {
      .container {
        flex-direction: column;
        text-align: center;
      }

      .social-icons a {
        font-size: 24px;
        margin: 0 8px;
      }

      .footer-container p {
        font-size: 14px;
      }
    }
    


</style>

    
</head>
<body>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I D Manpower Management Services</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script> <!-- JavaScript for Menu Toggle -->
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <nav>
            <ul id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="Hiring_page.php">Hiring</a></li>
                <li><a href="Contact_form.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger Icon -->
    </header>

    

    <!-- Home Section -->
    <section id="home">
        <div class="home-container">
            <div class="home-text">
                <h1>I D Manpower Services Pvt. Ltd.</h1>
                <p>Trust us to bring your vision to life.</p>
                <a href="Registrartion_form.php" class="join-btn">Join Us</a>
            </div>
        </div><br> <br>
          <div class="social-icons">
            <a href="https://www.facebook.com/profile" target="Facebook"><i class="fa-brands fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/nagpur_job_id_manpower_freejob?igsh=cDRkcGg3cnI3ZW53" target="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/@IDMANPOWERMANAGEMENTSERVICES" target="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://t.me/+sCKHkB2PhaRmNGQ1" target="Telegram"><i class="fa-brands fa-telegram"></i></a>
        </div>
        <div class="vacancy-container">
            <h1>Apply Now</h1>
            <marquee>
                <a href="Hiring_page.php">IT jobs, Sales jobs, Marketing jobs, Data Science jobs, HR jobs, Engineering jobs, Civil Engineering jobs, Accountant Jobs, BPO Executive Jobs, Warehouse Supervisor jobs, Banking Jobs, HR Jobs, Admin Job, Retail Officer Job</a>
            </marquee>
      </div>

    </section>

<!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <div class="about-container">
            <img src="about_image.jpg" alt="About Us">
            <div class="about-text">
                <p>I D Manpower Management Services is well known as a well-trained and educated manpower supplier with minimum service charges in Nagpur, Maharashtra.
                We are also specializing in recruitment & staffing solutions for organizations with minimum services charges. .We offer you an opportunity to establish a proven, technology based services which helps you to efficiently and effectively manage your business. You will enjoy the convenience of a personalised service with high degree of precision and innovation. We have more than two decades of experience in providing manpower services to various industries. We ensure to build environment friendly, comfort, safety, and efficiency services by integrating people, place, process, and technology.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services"> 
    <h2>Our Services</h2>
    <div class="service-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <div class="service-card">
                <img src="Manpower Supply.jpg" alt="Manpower Supply">
                <h3>Manpower Supply</h3>
            </div>
            <div class="service-card">
                <img src="Traning Devlopmentr.jpg" alt="Traning Devlopment">
                <h3>Traning Devlopment</h3>
            </div>
            <div class="service-card">
                <img src="facility-management.jpg" alt="facility-management">
                <h3>facility-management</h3>
            </div>
            <div class="service-card">
                <img src="Contractual Manpower.jpg" alt="Contractual Manpower">
                <h3>Contractual Manpower</h3>
            </div>
            <div class="service-card">
                <img src="Payroll Outsourcing.avif" alt="Payroll Outsourcing">
                <h3>Payroll Outsourcing</h3>
            </div>
        </div>

    <!-- Clients Section -->
        <section id="clients">
        <div class="clients-container">
            <div class="clients-text">
                <h1>Our Clients</h1>
                <p>We serve a diverse and discerning clientele seeking exceptional experiences.</p>
            </div>
            <div class="client-logos">
                <marquee behavior="scroll" direction="left" scrollamount="5">
                    <img src="Bajaj-Logo-1536x864.png" alt="Client 1">
                    <img src="diffusion_logo.jpeg" alt="Client 2">
                    <img src="A_globia_creation_logo.jpeg" alt="Client 3">
                    <img src="altius_logo.jpeg" alt="Client 4">
                    <img src="Relinces_pharma_logo.jpeg" alt="Client 5">
                    <img src="Ozone_logo.jpeg" alt="Client 6">
                </marquee>
            </div>
        </div>
    </section>
    

  <!-- Statistics Section -->
  <section class="stats-section">
        <div class="stat-box">
            <h2 class="counter" data-target="20000">0</h2>
            <p>Visitor</p>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="1000">0</h2>
            <p>Clients</p>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="15000">0</h2>
            <p>Selected</p>
        </div>
    </section>


<!----last page--->
<section class="info-section">
        <div class="container">
            <div class="main-content">
                <h2>I D Manpower SERVICES PVT. LTD.</h2>
                <p>
                    Established in 2000, <br>
                    One of the top most companies in Integrated Facility Management Services, <br>
                    IDiman represents a differentiated approach to <br>
                    facilities management across Pan India.
                </p>
            </div>

            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="Hiring_page.php">Hiring</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="Contact_form.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="services">
                <h2>Services</h2>
                <ul>
                    <li>Manpower Supply</li>
                    <li>Staffing Solution</li>
                    <li>Facility Management</li>
                    <li>Manpower Recruitment</li>
                    <li>PF & ESIC Benefits</li>
                    <li>Contractual Work</li>
                </ul>
            </div>

            <div class="contact-info">
                <h2>Get In Touch</h2>
                <ul>
                    <li>📞 <a href="tel:+918275193732">+91 8275193732</a></li>
                    <li>📞 <a href="tel:+919131216328">+91 9131216328</a></li>
                    <li>📧 <a href="mailto:contact@effiman.in">contact@effiman.in</a></li>
                    <li>📍 Lomanya Nagar Metro pillar no. p/10,<br>IC Chowk, Hingna Road,<br>Nagpur-4400</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <p>&copy; 2025 I D Manpower Services. All rights reserved.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile" target="_blank" aria-label="Facebook">
                <i class="fa-brands fa-facebook-square"></i>
            </a>
            <a href="https://www.instagram.com/nagpur_job_id_manpower_freejob?igsh=cDRkcGg3cnI3ZW53" target="_blank" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/@IDMANPOWERMANAGEMENTSERVICES" target="_blank" aria-label="YouTube">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="https://t.me/+sCKHkB2PhaRmNGQ1" target="_blank" aria-label="Telegram">
                <i class="fa-brands fa-telegram"></i>
            </a>
        </div>
    </div>
</footer>


<script>

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.getElementById("nav-links");
    const navItems = document.querySelectorAll("nav ul li a");

    // Toggle menu on mobile
    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("show-nav");
    });

    // Add active class when clicking a button
    navItems.forEach(item => {
        item.addEventListener("click", function () {
            navItems.forEach(link => link.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Animated Counter Function
    function animateCounter(counter) {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const speed = target / 100; // Adjust speed dynamically

        function updateCounter() {
            count += speed;
            if (count < target) {
                counter.innerText = Math.ceil(count);
                setTimeout(updateCounter, 30);
            } else {
                counter.innerText = target; // Ensure the final number is exact
            }
        }
        updateCounter();
    }

    // Use Intersection Observer to start animation when in viewport
    const counters = document.querySelectorAll(".counter");
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
  
   
});

    </script>

    </body>
    </html>
    
