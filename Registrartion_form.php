<?php
// Database Connection
$conn = new mysqli("localhost", "root", "root", "consultancy_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $sql = "INSERT INTO users_backups (first_name, age, education, experience, contact, email, password)
            VALUES ('$first_name', '$age', '$education', '$experience', '$contact', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='Login_form.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url("background_image1.jpg") no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .registration-container {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px 25px;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
            position: relative;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #fff;
        }

        .registration-form input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s ease-in-out;
        }

        .registration-form input:focus {
            border-color: #123cae;
            outline: none;
            box-shadow: 0px 0px 5px rgba(18, 60, 174, 0.5);
        }

        .registration-form button {
            width: 100%;
            padding: 12px;
            background: #112a90;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 12px;
            transition: 0.3s;
        }

        .registration-form button:hover {
            background: #0a1d5c;
            transform: scale(1.05);
        }

        .registration-form p {
            margin-top: 12px;
            font-size: 13px;
            color: #eee;
        }

        .registration-form a {
            color: #1e9bff;
            text-decoration: none;
            font-weight: bold;
        }

        .registration-form a:hover {
            text-decoration: underline;
        }

        .back-btn {
            position: absolute;
            top: 12px;
            left: 12px;
            background-color: #1b74e4;
            color: white;
            border: none;
            padding: 6px 14px;
            font-size: 13px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .back-btn:hover {
            background-color: #1357b3;
        }

        @media screen and (max-width: 768px) {
            .registration-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <button class="back-btn" onclick="window.location='consultancy_p.php'">← Home</button>
        <h2>Register Here</h2>
        <form class="registration-form" method="POST">
            <input type="text" name="first_name" placeholder="Full Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="education" placeholder="Education" required>
            <input type="text" name="experience" placeholder="Experience" required>
            <input type="text" name="contact" placeholder="Contact" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="Login_form.php">Login</a></p>
        </form>
    </div>
</body>
</html>
