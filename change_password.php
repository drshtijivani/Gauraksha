<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die(json_encode(['success' => false, 'message' => 'Not logged in.']));
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaushala";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die(json_encode(['success' => false, 'message' => 'Database error.']));

$oldPassword = $_POST['oldPassword'] ?? '';
$newPassword = $_POST['newPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

// Check if new passwords match
if ($newPassword !== $confirmPassword) {
    die(json_encode(['success' => false, 'message' => 'Passwords do not match.']));
}

// Fetch current password hash for the logged-in user
$stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows !== 1) {
    die(json_encode(['success' => false, 'message' => 'User not found.']));
}
$user = $result->fetch_assoc();

// Verify the old password
if (!password_verify($oldPassword, $user['password'])) {
    die(json_encode(['success' => false, 'message' => 'Incorrect old password.']));
}

// Update password
$newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$stmt->bind_param("si", $newPasswordHash, $_SESSION['user_id']);
$stmt->execute();

echo json_encode(['success' => true]);
?>
