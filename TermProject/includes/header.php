<?php
require_once './includes/session_start.php';
$loggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/bootstrap.bundle.min.js"></script>
    <title>Portfolio</title>
</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-weight: 250;padding-left:20px">Rishabh Watts</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="padding-left:600px">
                        <div class="header-nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" style="font-size: 20px;">Home</a>
                        </div>
                        <div class="header-nav-item">
                            <a class="nav-link" href="projects.php" style="font-size: 20px;">Projects</a>
                        </div>
                        <div class="header-nav-item">
                            <a class="nav-link" href="https://drive.google.com/file/d/1mf4HpCXDWxBXpD6ZWdDFdDF2Q95sa8nm/view" target="_blank" style="font-size: 20px;">Resume</a>
                        </div>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <div class="d-flex">
                            <div class="header-nav-item">
                                <a class="nav-link" id="signup" href="signupform.php" style="font-size: 20px;">Sign Up</a>
                            </div>

                            <div class="header-nav-item">
                                <a class="nav-link d-none"id="login" href="loginform.php" style="font-size: 20px;">Login</a>
                            </div>
                            <div class="header-nav-item">
                                <a class="nav-link d-none" href="logout.php" id="logout" style="font-size: 20px;">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var logoutButton = document.getElementById('logout');
        var loginButton = document.getElementById('login');
        var signupButton = document.getElementById('signup');
        
        if (<?php echo json_encode($loggedIn); ?>) {
            logoutButton.classList.remove('d-none'); 
            loginButton.classList.add('d-none'); 
            signupButton.classList.add('disabled'); 
            signupButton.href = "#"; 
        } else {
            logoutButton.classList.add('d-none'); 
            loginButton.classList.remove('d-none'); 
            signupButton.classList.remove('disabled'); 
            signupButton.href = "signupform.php"; 
        }
    });
</script>
   
  
</body>
</html>