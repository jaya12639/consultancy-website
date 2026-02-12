<?php
session_start();
$conn = new mysqli("localhost", "root", "root", "consultancy_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin Credentials
$admin_email = "admin@example.com";
$admin_password = "Admin@123"; 

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Admin Login Check
    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['admin'] = "Admin"; 
        echo "<script>alert('Admin Login Successful!'); window.location='admin_pannal.php';</script>";
        exit;
    }

    // Regular User Check
    $stmt = $conn->prepare("SELECT first_name, password FROM users_backups WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['first_name'];
            echo "<script>alert('User Login Successful!'); window.location='consultancy_p.php';</script>";
        } else {
            echo "<script>alert('Invalid Password!');</script>";
        }
    } else {
        echo "<script>alert('User Not Found!');</script>";
    }
    
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url("background_image_ragistration_form.jpg") no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px 25px;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #fff;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s ease-in-out;
        }

        .login-form input:focus {
            border-color: #19b4c8;
            outline: none;
            box-shadow: 0px 0px 5px rgba(25, 180, 200, 0.5);
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background: #19b4c8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 12px;
            transition: 0.3s;
        }

        .login-form button:hover {
            background: #138a9e;
            transform: scale(1.05);
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
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <button class="back-btn" onclick="window.location='consultancy_p.php'">← Home</button>
        <h2>Login</h2>
        <form class="login-form" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
