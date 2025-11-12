<?php
// Start session (if you want to use sessions)
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaushala";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name = $_POST['full_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$postal_code = $_POST['postal_code'] ?? '';
$hours_per_week = $_POST['hours_per_week'] ?? '';
$consent = isset($_POST['consent']) ? 1 : 0;

// Handle areas of interest (checkboxes)
$interests = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : '';
$other_interest_detail = $_POST['other_interest_detail'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO vr (
    full_name, email, phone, address, city, state, postal_code,
    hours_per_week, interests, consent
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssi",
    $full_name, $email, $phone, $address, $city, $state, $postal_code,
    $hours_per_week, $interests, $consent
);

// Execute and check
if ($stmt->execute()) {
    // Success: Show dialog and redirect on OK
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
            .dialog { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1); text-align: center; }
            .dialog button { background: #4070f4; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-top: 20px; }
            .dialog button:hover { background: #265df2; }
        </style>
    </head>
    <body>
        <div class="dialog">
            <h2>Thank You!</h2>
            <p>We will reach you soon.</p>
            <button onclick="window.location.href='volunteer.html'">OK</button>
        </div>
    </body>
    </html>
HTML;
    exit;
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
