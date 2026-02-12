<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "root", "consultancy_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $age = (int) $_POST['age'];
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $position = $conn->real_escape_string($_POST['position']);
    $message = $conn->real_escape_string($_POST['message']);

    $resume_dir = "uploads/";
    if (!is_dir($resume_dir)) {
        mkdir($resume_dir, 0777, true);
    }

    $resume_file = $resume_dir . basename($_FILES["resume"]["name"]);

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_file)) {
        $stmt = $conn->prepare("INSERT INTO job_applications 
            (first_name, last_name, age, email, mobile, position, resume, message) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssisssss", $first_name, $last_name, $age, $email, $mobile, $position, $resume_file, $message);

        if ($stmt->execute()) {
            echo "<script>
                alert('Application Submitted Successfully!');
                window.location.href = 'hiring_page.html';
            </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "<script>alert('Failed to upload resume. Please try again.');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Job</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url('background_image_ragistration_form.jpg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            position: relative;
        }

        .back-home {
            position: fixed;
            top: 25px;
            left: 25px;
            background: #ff4d4d;
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s ease-in-out;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
        }

        .back-home:hover {
            background: #1a237e;
            transform: scale(1.05);
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 35px;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 550px;
            text-align: center;
        }

        h2 {
            font-size: 28px;
            color: #283593;
            margin-bottom: 25px;
        }

        input, textarea, input[type="file"] {
            width: 100%;
            padding: 13px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus, input[type="file"]:focus {
            border-color: #3f51b5;
            box-shadow: 0 0 10px rgba(63, 81, 181, 0.3);
            outline: none;
        }

        button {
            background: linear-gradient(45deg, #3f51b5, #5c6bc0);
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 12px;
            transition: background 0.3s ease, transform 0.2s;
        }

        button:hover {
            background: linear-gradient(45deg, #303f9f, #3949ab);
            transform: scale(1.03);
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 30px 20px;
            }

            .back-home {
                top: 15px;
                left: 15px;
                padding: 8px 18px;
                font-size: 13px;
            }

            h2 {
                font-size: 24px;
            }

            input, textarea {
                font-size: 14px;
            }

            button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 25px 15px;
            }

            .back-home {
                padding: 7px 16px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <!-- Back to Home Button -->
    <a href="consultancy_p.php" class="back-home">← Back to Home</a>

    <!-- Job Application Form -->
    <div class="form-container">
        <h2>Apply for a Job</h2>
        <form action="job_application.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="mobile" placeholder="Mobile" required>
            <input type="text" name="position" placeholder="Position Applied For" required>
            <input type="file" name="resume" accept=".pdf,.doc,.docx" required>
            <textarea name="message" placeholder="Message (Optional)" rows="4"></textarea>
            <button type="submit">Submit Application</button>
        </form>
    </div>

</body>
</html>
