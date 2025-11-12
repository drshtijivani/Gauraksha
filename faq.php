<?php
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
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$question = $_POST['question'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO faq_inquiries (name, email, question) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $question);

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
            <p>We will answer you soon.</p>
            <button onclick="window.location.href='faq.html'">OK</button>
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
