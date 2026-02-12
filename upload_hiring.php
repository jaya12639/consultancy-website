<?php
$conn = new mysqli("localhost", "root", "root", "consultancy_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Image Upload
if (isset($_POST["upload"])) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["hiring_image"]["name"]);
    $target_file = $target_dir . $file_name;
    
    if (move_uploaded_file($_FILES["hiring_image"]["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO hiring_posts (image_path) VALUES (?)");
        $stmt->bind_param("s", $target_file);
        $stmt->execute();
        echo "<p class='success'>Hiring post uploaded successfully!</p>";
    } else {
        echo "<p class='error'>Error uploading file.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Hiring Post</title>
    <style>
        body {
            background: url("background_image1.jpg") no-repeat center center/cover;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.4);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 500px;
        }
        h2 {
            color:rgb(239, 243, 246);
            margin-bottom: 20px;
        }
        .input-container {
            margin-bottom: 20px;
        }
        input[type="file"] {
            padding: 10px;
            border: 2px solid #125688;
            border-radius: 5px;
            width: 100%;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }
        .upload-btn {
            background-color: #0d6efd;
            color: white;
        }
        .upload-btn:hover {
            background-color: #094db1;
        }
        .back-btn {
            background-color:rgb(30, 94, 146);
            color: white;
            margin-top: 10px;
        }
        .back-btn:hover {
            background-color: #a71d2a;
        }
        @media (max-width: 600px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="btn back-btn" onclick="window.location='admin_pannal.php'">Back to Admin</button>
        <h2>Upload Hiring Post</h2>
        <form action="manage_hiring_post.php" method="post" enctype="multipart/form-data">
            <div class="input-container">
                <input type="file" name="hiring_image" required>
            </div>
            <button type="submit" name="upload" class="btn upload-btn">Upload</button>
        </form>
    </div>
</body>
</html>
