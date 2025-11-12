<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donate to Gaushalas</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php session_start(); ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<div class="profile-dropdown" style="position: fixed; top: 20px; right: 20px; z-index: 2100; display: flex; align-items: center;">
  <span style="margin-right: 10px; font-family: 'Montserrat', sans-serif; color: #555;">
    Welcome! <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?>
  </span>
  <button id="profileBtn" style="background: none; border: none; cursor: pointer;">
    <i class="fas fa-user" style="font-size: 40px; color: #555;"></i>
  </button>
  <div id="profileMenu" class="dropdown-menu" style="display: none; position: fixed; top: 70px; right: 30px; z-index: 2000; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-radius: 5px; padding: 10px; min-width: 220px;">
    <hr>
    <a href="#" id="logoutBtn" class="dropdown-item">Logout</a>
    <a href="#" id="CP" class="dropdown-item">Change Password</a>
  </div>
</div>

  <script>
// Toggle profile menu
document.getElementById('profileBtn').addEventListener('click', function(e) {
  e.stopPropagation();
  document.getElementById('profileMenu').style.display = 
    document.getElementById('profileMenu').style.display === 'block' ? 'none' : 'block';
});
document.addEventListener('click', function() {
  document.getElementById('profileMenu').style.display = 'none';
});

// Show logout confirmation popup
// Show Change Password modal only when the link is clicked
document.getElementById('CP').addEventListener('click', function(e) {
  e.preventDefault();
  document.getElementById('changePasswordModal').style.display = 'flex';
});

// Show Logout modal only when the link is clicked
document.getElementById('logoutBtn').addEventListener('click', function(e) {
  e.preventDefault();
  document.getElementById('logoutModal').style.display = 'flex';
});


// Handle form submission (optional: use AJAX or let the form submit normally)
document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
  // If you want to handle submission with JavaScript (AJAX), use the code below
  // Otherwise, let the form submit to change_password.php
  e.preventDefault(); // Uncomment if using AJAX


});
// Example: Show logout modal if URL contains '?logout=true'
if (window.location.search.includes('logout=true')) {
  document.getElementById('logoutModal').style.display = 'flex';
}

</script>

<!-- Example: You might have a header/navbar here -->
<!-- Place your navbar code here if needed -->

<section class="ftco-section ftco-no-pb" id="causes">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                
                <h2>Donate to Gaushalas</h2>
            </div>
        </div>
        <div class="row">
            <!-- Gaushala 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="gaushala.php?id=1" class="img w-100" style="background-image: url(images/g1.jpg); min-height: 200px;"></a>
                    <div class="text p-3">
                        <h2><a href="gaushala.php?id=1">SHREE Jalaram Gaushala Bhabhar
</a></h2>
                        <p>Location: Banaskantha, North Gujarat</p>
                        <p>Address: At & Post - Bhabhar
Ta. Bhabhar,
Dist. Banaskantha.</p>
                        <div class="goal mb-4">
                            <p><span>₹10,000</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:60%; height:20px">60%</div>
                            </div>
                        </div>
                        <p><a href="gaushala.php?id=1" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <!-- Gaushala 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="gaushala.php?id=2" class="img w-100" style="background-image: url(images/g2.png); min-height: 200px;"></a>
                    <div class="text p-3">
                        <h2><a href="gaushala.php?id=2">Maa Gauri Gaushala</a></h2>
                        <p>Location: Rajkot, Gujarat</p>
                        <p>Address: Rajkot-Bhavnager Highway,
Nr, R K Univery and Behind Murlidhar Highschool,
Kalipat</p>
                        <div class="goal mb-4">
                            <p><span>₹10,000</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:60%; height:20px">60%</div>
                            </div>
                        </div>
                        <p><a href="gaushala.php?id=2" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <!-- Gaushala 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="gaushala.php?id=3" class="img w-100" style="background-image: url(images/g3.png); min-height: 200px;"></a>
                    <div class="text p-3">
                        <h2><a href="gaushala.php?id=3">Brahmanand Gauseva</a></h2>
                        <p>Location: Junagad, Gujarat</p>
                        <p>Address: Junagad-Visavadar Highway Chaparda, 
Tal. Visavadar, Dist.Junagadh, Gujarat-362130</p>
                        <div class="goal mb-4">
                            <p><span>₹10,000</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:60%; height:20px">60%</div>
                            </div>
                        </div>
                        <p><a href="gaushala.php?id=3" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <!-- Gaushala 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="gaushala.php?id=4" class="img w-100" style="background-image: url(images/g4.png); min-height: 200px;"></a>
                    <div class="text p-3">
                        <h2><a href="gaushala.php?id=4">Shri Mataji Gaushala</a></h2>
                        <p>Location: Mathura, UttarPradesh</p>
                        <p>Address: Shri Maan Mandir Sewa Sansthan
Barsana (Mathura)</p>
                        <div class="goal mb-4">
                            <p><span>₹10,000</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:60%; height:20px">60%</div>
                            </div>
                        </div>
                        <p><a href="gaushala.php?id=4" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Example: You might have a footer here -->
<!-- Place your footer code here if needed -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>





<!-- Logout Confirmation Modal (hidden by default) -->
<div id="logoutModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 3000; display: flex; justify-content: center; align-items: center;">
  <div style="background: #fff; padding: 30px; border-radius: 10px; text-align: center; max-width: 400px; width: 90%;">
    <h3 style="margin-bottom: 20px;">Are you sure you want to logout?</h3>
    <p style="margin-bottom: 25px;">You will be signed out of your account.</p>
    <div style="display: flex; justify-content: center; gap: 15px;">
      <button onclick="document.getElementById('logoutModal').style.display='none'" style="background: #ddd; color: #333; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cancel</button>
      <button onclick="window.location.href='logout.php'" style="background: #4070f4; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button>
    </div>
  </div>
</div>

<!-- Change Password Modal (hidden by default) -->
<div id="changePasswordModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 3000; display: flex; justify-content: center; align-items: center;">
  <div style="background: #fff; padding: 30px; border-radius: 10px; text-align: center; max-width: 400px; width: 90%;">
    <h3 style="margin-bottom: 20px;">Change Password</h3>
    <form id="changePasswordForm">
      <div style="margin-bottom: 15px; text-align: left;">
        <label for="oldPassword">Old Password</label>
        <input type="password" id="oldPassword" name="oldPassword" required>
      </div>
      <div style="margin-bottom: 15px; text-align: left;">
        <label for="newPassword">New Password</label>
        <input type="password" id="newPassword" name="newPassword" required>
      </div>
      <div style="margin-bottom: 15px; text-align: left;">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <div id="changePasswordError" style="color: red; font-size: 0.8em; margin-top: 5px;"></div>
      </div>
      <div style="display: flex; justify-content: center; gap: 15px;">
        <button type="button" onclick="document.getElementById('changePasswordModal').style.display='none'" style="background: #ddd; color: #333; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cancel</button>
        <button type="submit" style="background: #4070f4; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Change</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
