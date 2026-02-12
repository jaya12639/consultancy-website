<?php
$conn = new mysqli("localhost", "root", "root", "consultancy_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM job_applications";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Users</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            background-image: url(background_image_ragistration_form.jpg);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar */
        .sidebar {
            width: 25%;
            min-width: 200px;
        }

        .sidebar button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .back-btn {
            background-color: #6c757d;
            color: white;
        }
        .back-btn:hover {
            background-color: #545b62;
        }

        .manage-btn {
            background-color: #007BFF;
            color: white;
        }
        .manage-btn:hover {
            background-color: #0056b3;
        }

        .upload-btn {
            background-color: #28a745;
            color: white;
        }
        .upload-btn:hover {
            background-color: #218838;
        }

        /* Table Styles */
        .table-container {
            width: 70%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        /* Delete Button */
        .delete-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: darkred;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .sidebar, .table-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <button class="back-btn" onclick="window.location='consultancy_p.php'">Back to Home</button>
            <button class="manage-btn" onclick="window.location='admin_pannal.php'">Manage Users</button>
            <button class="upload-btn" onclick="window.location='upload_hiring.php'">Upload Hirings</button>
        </div>

        <!-- Job Applications Table -->
        <div class="table-container">
            <h3>Job Applications</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Position</th>
                    <th>Resume</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['first_name'] . ' ' . $row['last_name'] ?></td>
                        <td><?= $row['age'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['position'] ?></td>
                        <td><a href="<?= $row['resume'] ?>" target="_blank">View Resume</a></td>
                        <td><?= $row['message'] ?></td>
                        <td>
                            <form action="Delete_application.php" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>

<?php $conn->close(); ?>

