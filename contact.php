<?php
session_start();
if (isset($_SESSION['msg'])) { ?>
    <div class="<?php echo $_SESSION['msg_type'] == 'success' ? 'succWrap' : 'errorWrap'; ?>">
        <strong><?php echo $_SESSION['msg_type'] == 'success' ? 'SUCCESS' : 'ERROR'; ?></strong>: 
        <?php echo htmlentities($_SESSION['msg']); ?>
    </div>
    <?php 
    unset($_SESSION['msg']);
    unset($_SESSION['msg_type']);
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- External Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="style5.css">
    <style>
    body {
        background-color: #eef2f3;
        font-family: 'Roboto', sans-serif;
    }

    .header-line {
        font-size: 32px;
        color: #444;
        font-weight: bold;
        margin: 40px 0;
        text-align: center;
        animation: fadeInDown 1s ease-in-out;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-panel {
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        background-color: #ffffff;
        padding: 40px;
        margin-top: 30px;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .contact-panel:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .panel-heading {
        background-color: #0066cc;
        color: white;
        text-align: center;
        font-size: 24px;
        padding: 15px;
        border-radius: 15px 15px 0 0;
    }

    .form-group label {
        font-weight: bold;
        color: #555;
        display: inline-block;
        margin-bottom: 8px;
        animation: fadeIn 1.5s ease;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        padding: 10px 15px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #0066cc;
        box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        transform: scale(1.02);
    }

    .btn-submit {
        background-color: #0066cc;
        border-color: #0066cc;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 25px;
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
        display: block;
        width: 100%;
    }

    .btn-submit:hover {
        background-color: #004999;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 73, 153, 0.4);
    }

    textarea.form-control {
        resize: none;
    }

    .succWrap, .errorWrap {
        padding: 15px;
        margin: 25px 0;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
        width: 100%;
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    .succWrap {
        background: #28a745;
        color: #fff;
    }

    .errorWrap {
        background: #dc3545;
        color: #fff;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .contact-panel {
            padding: 25px;
        }

        .btn-submit {
            padding: 14px;
            font-size: 16px;
        }
    }
</style>

</head>

<body>
<div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="index.php"><img src="logo.png" alt="">
                    <span>HealthHaven: Appointment Scheduler</span>
            </div>
            <div class="nav-menu" id="navMenu">
           <ul>
                <li><a href="index.php" class="mobile-only">Patient</a></li>
                <li><a href="doctor-login.php" class="mobile-only">Doctor</a></li>
                <li><a href="admin-login.php" class="mobile-only">Admin</a></li>
                <li><a href="contact.php" class="mobile-only">Contact Us</a></li>
            </ul>
            </div>

            <div class="nav-button">
                <button class="btn white-btn" id="registerBtn" onclick="redirectToPatientLogin()">Patient</button>
                <button class="btn white-btn" id="registerBtn" onclick="redirectToDoctorLogin()">Doctor</button>
                <button class="btn white-btn" id="registerBtn" onclick="redirectToAdminLogin()">Admin</button>
                <button class="btn white-btn" id="registerBtn" onclick="redirectToContact()">Contact US</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>
    <div class="container">
        <h2 class="header-line">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-panel">
                    <div class="panel-heading">Send Us a Message</div>
                    <div class="panel-body">
                        <form method="post" action="process_contact.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
	<div style="position: fixed; bottom: 0; left: 0; width: 100%; height: 20px; z-index: 1000; background: transparent;"
     onmouseenter="document.querySelector('.footer').style.transform='translateY(0)';">
</div>

<div class="footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: #4facfe; color: white; text-align: center; padding: 20px 0; font-size: 16px; transition: transform 0.3s ease, background-color 0.3s ease; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); z-index: 1000; transform: translateY(100%);"
     onmouseleave="this.style.transform='translateY(100%)';">
  <div class="footer-content" style="display: flex; justify-content: center; align-items: center; gap: 20px;">
    <a href="#" style="text-decoration: none; color: white; font-size: 18px; transition: color 0.3s ease, transform 0.3s ease; position: relative; overflow: hidden;">Privacy Policy</a>
    <a href="#" style="text-decoration: none; color: white; font-size: 18px; transition: color 0.3s ease, transform 0.3s ease; position: relative; overflow: hidden;">Terms of Service</a>
    <p style="font-size: 14px;">&copy; 2024 HealthHaven. All rights reserved.</p>
  </div>
  <div class="social-media" style="margin-top: 10px;">
    <a href="https://x.com/Suhail442795699" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">Twitter</a>
    <a href="https://www.linkedin.com/in/suhailahmad786/" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">LinkedIn</a>
    <a href="https://www.instagram.com/just_sam_223/" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">Instagram</a>
  </div>
</div>


    <!-- Scripts -->
	 <script>
		function redirectToPatientLogin() {
            window.location.replace("index.php");
        }
        function redirectToDoctorLogin() {
            window.location.replace("doctor-login.php");
        }
        function redirectToAdminLogin() {
            window.location.replace("admin-login.php");
        }
        function redirectToContact() {
            window.location.replace("contact.php"); // Corrected function for "Contact Us"
        }
		document.addEventListener('DOMContentLoaded', () => {
        const footer = document.querySelector('footer');
        const triggerZone = document.querySelector('.footer-trigger-zone');

        triggerZone.addEventListener('mouseenter', () => {
            footer.style.transform = 'translateY(0)'; // Show footer
        });

        footer.addEventListener('mouseleave', () => {
            footer.style.transform = 'translateY(100%)'; // Hide footer
        });
    });
	 </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
