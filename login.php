<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaushala";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Get form data
$login_username = $_POST['login_username'] ?? '';
$login_password = $_POST['login_password'] ?? '';

// Fetch user
$sql = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($login_password, $user['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Success</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <style>
    /* Google Fonts - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    section {
      position: fixed;
      height: 100%;
      width: 100%;
      background: #e3f2fd;
    }
    .overlay {
      position: fixed;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.3);
      opacity: 1;
      pointer-events: auto;
    }
    .modal-box {
      position: fixed;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 380px;
      width: 100%;
      padding: 30px 20px;
      border-radius: 24px;
      background-color: #fff;
      opacity: 1;
      pointer-events: auto;
      transition: all 0.3s ease;
      transform: translate(-50%, -50%) scale(1);
    }
    .modal-box i {
      font-size: 70px;
      color: #75d479;
    }
    .modal-box h2 {
      margin-top: 20px;
      font-size: 25px;
      font-weight: 500;
      color: #333;
    }
    .modal-box h3 {
      font-size: 16px;
      font-weight: 400;
      color: #333;
      text-align: center;
    }
    .modal-box .buttons {
      margin-top: 25px;
    }
  </style>
</head>
<body>
  <section class="active">
    <span class="overlay"></span>
    <div class="modal-box">
      <i class="fa-regular fa-circle-check"></i>
      <h2>Success</h2>
      <h3>You have logged in successfully.</h3>
    </div>
  </section>
  
  <script>
    
    setTimeout(function() {
      window.location.href = "donate.php";
    }, 700);
  </script>
</body>
</html>
<?php
        exit;
    }
}
echo "Invalid username or password!";
$stmt->close();
$conn->close();
?>
