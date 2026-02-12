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

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($imageFileType, $allowed_types)) {
        echo "<p class='error'>Only JPG, JPEG, PNG, and GIF files are allowed.</p>";
    } elseif (move_uploaded_file($_FILES["hiring_image"]["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO hiring_posts (image_path) VALUES (?)");
        $stmt->bind_param("s", $target_file);
        $stmt->execute();
        echo "<p class='success'>Hiring post uploaded successfully!</p>";
    } else {
        echo "<p class='error'>Error uploading file.</p>";
    }
}

// Handle Image Deletion
if (isset($_POST["delete"])) {
    $id = intval($_POST["delete"]);
    
    $stmt = $conn->prepare("SELECT image_path FROM hiring_posts WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (file_exists($row["image_path"])) {
            unlink($row["image_path"]);  // Delete image file
        }

        $deleteStmt = $conn->prepare("DELETE FROM hiring_posts WHERE id=?");
        $deleteStmt->bind_param("i", $id);
        $deleteStmt->execute();
        
        echo "<p class='success'>Image deleted successfully!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Hiring Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('background_image_registration_form.jpg');
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .container {
            width: 85%;
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            margin: 40px auto;
            border-radius: 12px;
            box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
        }
        h2 {
            margin-bottom: 30px;
        }
        .upload-section {
            margin-bottom: 30px;
        }
        input[type="file"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
        }
        .upload-btn, .back-btn, .delete-btn {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        .upload-btn {
            background-color: #0d6efd;
            color: white;
        }
        .upload-btn:hover {
            background-color: #094db1;
        }
        .back-btn {
            background-color: green;
            color: white;
            margin-bottom: 20px;
        }
        .back-btn:hover {
            background-color: darkgreen;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }
        .image-box {
            width: 250px;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }
        .image-box img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .delete-btn {
            margin-top: 10px;
            background-color: red;
            color: white;
        }
        .delete-btn:hover {
            background-color: darkred;
        }
        p.success { color: green; font-weight: bold; }
        p.error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <button class="back-btn" onclick="window.location='admin_pannal.php'">← Back to Admin Panel</button>
<!--         
        <h2>Upload New Hiring Post</h2>
        <div class="upload-section">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="hiring_image" required>
                <br>
                <button type="submit" name="upload" class="upload-btn">Upload Post</button>
            </form>
        </div> -->

        <h2>Uploaded Hiring Posts</h2>
        <div class="gallery">
            <?php
            $sql = "SELECT * FROM hiring_posts ORDER BY id DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<div class='image-box'>";
                echo "<img src='" . htmlspecialchars($row["image_path"]) . "' alt='Hiring Post'>";
                echo "<form method='post'>";
                echo "<button type='submit' name='delete' value='" . $row["id"] . "' class='delete-btn' onclick=\"return confirm('Are you sure you want to delete this post?');\">Delete</button>";
                echo "</form>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
