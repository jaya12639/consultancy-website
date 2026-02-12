<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - I D Manpower Management Services</title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Reset & Basic Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('background_image_ragistration_form.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 20px;
        }

        /* Back to Home Button */
        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
            background:rgb(213, 88, 10);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease-in-out;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .back-home:hover {
            background: rgb(159, 42, 10);
            transform: scale(1.1);
        }

        h1 {
            font-size: 2.5em;
            color: rgb(18, 7, 164);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            width: 90%;
            max-width: 1000px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .contact-left {
            flex: 1;
            text-align: left;
            padding: 20px;
        }

        .contact-left h2 {
            font-size: 26px;
            color:rgb(12, 41, 155);
            margin-bottom: 15px;
        }

        .contact-left ul {
            list-style: none;
        }

        .contact-left ul li {
            font-size: 18px;
            margin: 12px 0;
            display: flex;
            align-items: center;
            color: #555;
            transition: 0.3s ease-in-out;
        }

        .contact-left ul li:hover {
            color: rgb(159, 42, 10);
            transform: translateX(5px);
        }

        /* Attractive Icons */
        .contact-left ul li i {
            font-size: 22px;
            margin-right: 12px;
            color:rgb(21, 31, 172);
            transition: transform 0.3s ease-in-out;
        }

        .contact-left ul li:hover i {
            transform: scale(1.3);
        }

        .contact-left ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .contact-left ul li a:hover {
            color: rgb(159, 42, 10);
        }

        .contact-right {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .contact-right img {
            width: 100%;
            max-width: 450px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }

            .contact-left {
                text-align: center;
            }

            .contact-left ul {
                padding-left: 0;
            }

            .contact-left ul li {
                justify-content: center;
            }

            .back-home {
                top: 10px;
                left: 10px;
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Back to Home Button -->
    <a href="consultancy_p.php" class="back-home"> Back to Home</a>

    <h1>Contact Us</h1>

    <div class="contact-container">
        <!-- Left Side Content -->
        <div class="contact-left">
            <h2>Get Our Office Timing</h2>
            <ul>
                <li>🕒 10 AM - 6 PM</li>
                <li>📅 Monday - Saturday</li>
            </ul>

            <h2>Our Contact</h2>
            <ul>
                <li>📞 <a href="tel:+918275193732">+91 8275193732</a></li>
                <li>📞 <a href="tel:+919131216328">+91 9131216328</a></li>
                <li>📧 <a href="mailto:contact@effiman.in">contact@effiman.in</a></li>
                <li>📍 Lomanya Nagar Metro pillar no. P/10, IC Chowk, Hingna Road, <br> Nagpur- 440016</li>
            </ul>
        </div>

        <!-- Right Side Image -->
        <div class="contact-right">
            <img src="contact_us1.png" alt="Office Image">
        </div>
    </div>

</body>
</html>
