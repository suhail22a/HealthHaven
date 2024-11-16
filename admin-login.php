<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" type="text/css" href="style5.css">
    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
        function redirectToPatientLogin() {
            window.location.replace("index.php");
            return false;          
        }
        function redirectToDoctorLogin() {
            window.location.replace("doctor-login.php");
            return false;
        }
        function redirectToAdminLogin() {
            window.location.replace("admin-login.php");
            return false;
        }
        function showForm(formId) {
            var forms = document.getElementsByClassName("register-container");
            for (var i = 0; i < forms.length; i++) {
                forms[i].style.display = "none";
            }

            var form = document.getElementById(formId);
            form.style.display = "block";
        }
    </script>
</head>

<body>

    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="index.php"><img src="logo.png" alt="">
                    <span>MediBook: Appointment Schedule</span>
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
                <button class="btn white-btn" id="registerBtn" onclick="redirectToContact()">Contact Us</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="register-container" id="loginAdmin">
            <div class="top">
                <header>Login as Admin</header>
            </div>
            <form action="function3.php" method="POST" onsubmit="return validateAdminForm();">
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="form-control" placeholder="User Name *" name="username1" />
                        <i class="bx bx-user"></i><br><br>
                    </div>
                    <div class="input-box">
                        <input type="password" class="form-control" placeholder="Password *" name="password2" />
                        <i class="bx bx-lock-alt"></i><br><br>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btnRegister" name="adsub" value="Login" />
                </div>
            </form>
        </div>
    </div>
    <div class="footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: #4facfe; color: white; text-align: center; padding: 20px 0; font-size: 16px; transition: background-color 0.3s ease, transform 0.3s ease; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); z-index: 1000; animation: slideUp 1s ease-out;">
  <div class="footer-content" style="display: flex; justify-content: center; align-items: center; gap: 20px;">
    <a href="#" style="text-decoration: none; color: white; font-size: 18px; transition: color 0.3s ease, transform 0.3s ease; position: relative; overflow: hidden;">Privacy Policy</a>
    <a href="#" style="text-decoration: none; color: white; font-size: 18px; transition: color 0.3s ease, transform 0.3s ease; position: relative; overflow: hidden;">Terms of Service</a>
    <p style="font-size: 14px; animation: fadeIn 1s ease-in-out;">&copy; 2024 HealthHaven. All rights reserved.</p>
  </div>
  <div class="social-media" style="margin-top: 10px;">
    <a href="https://x.com/Suhail442795699" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">Twitter</a>
    <a href="https://www.linkedin.com/in/suhailahmad786/" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">LinkedIn</a>
    <a href="https://www.instagram.com/just_sam_223/" style="text-decoration: none; color: white; margin: 0 10px; font-size: 20px; transition: transform 0.3s ease, color 0.3s ease;">Instagram</a>
  </div>
</div>
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
            window.location.replace("contact.php"); 
        }
    </script>
</body>
</html>