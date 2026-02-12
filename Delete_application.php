<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "root", "consultancy_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $sql = "DELETE FROM job_applications WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Application Deleted Successfully!'); window.location='admin_pannal.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
