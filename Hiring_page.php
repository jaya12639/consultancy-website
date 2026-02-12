<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiring Posts</title>
    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Background Image */
        body {
            background: url("background_image1.jpg") no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Header Container */
        .header {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        /* Page Title */
        h2 {
            font-size: 32px;
            color: rgb(18, 146, 201);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Back Button */
        .back-btn {
            background: rgb(22, 128, 194);
            color: white;
            padding: 10px 18px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            text-decoration: none;
        }

        .back-btn:hover {
            background: #1c5985;
        }

        /* Job Card Container */
        #job-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
        }

        /* Job Card Design */
        .job-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin: 15px;
            padding: 20px;
            width: 290px;
            text-align: center;
            backdrop-filter: blur(5px);
        }

        .job-card:hover {
            transform: translateY(-8px);
        }

        /* Image Styling */
        .job-card img {
            width: 100%;
            height: 250px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Apply Button */
        .apply-btn {
            display: inline-block;
            background: rgb(3, 63, 100);
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            text-decoration: none;
        }

        .apply-btn:hover {
            background: #1c5985;
        }

        /* Apply Button Link */
        .apply-btn a {
            color: white;
            text-decoration: none;
        }

        @media screen and (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: center;
            }
            #job-list {
                flex-direction: column;
                align-items: center;
            }
            .back-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Header with Title & Back Button -->
    <div class="header">
        <h2>Current Vacancies</h2>
        <button class="back-btn" onclick="window.location='consultancy_p.php'">Back</button>
    </div>

    <div id="job-list">
        <?php
        // Database Connection
        $conn = new mysqli("localhost", "root", "root", "consultancy_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch hiring posts from database
        $result = $conn->query("SELECT * FROM hiring_posts ORDER BY created_at DESC");

        while ($row = $result->fetch_assoc()) {
            echo '<div class="job-card">';
            echo '<img src="' . $row["image_path"] . '" alt="Hiring Image">';
            echo '<button class="apply-btn"><a href="job_application.php">Apply Now</a></button>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
