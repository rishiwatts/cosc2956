<?php
require_once './includes/session_start.php';

?>
<?php 
    $title = "Login Received";
    require_once './includes/header.php';
    require_once './includes/conn.php';
    ?>
<div class="container" style="margin-top: 100px;">

<?php 

    $emailLogin = $_POST['email'];
    $passwordLogin = $_POST['password'];

    $emailLogin = mysqli_real_escape_string($conn, $emailLogin);
    $passwordLogin=mysqli_real_escape_string($conn, $passwordLogin);


    $sql = "SELECT password FROM `portfolio` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $emailLogin);
    $stmt->execute();
    $stmt->bind_result($passwordDb);
    $stmt->fetch();
    $stmt->close();
   
    if (password_verify($passwordLogin, $passwordDb)){
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $emailLogin;
        header('Location: projects.php');
        exit();
    }
    else{
        header('Location: loginform.php?error=1');
    exit();
    } 
    
    
?> 
<?php 
    require_once './includes/footer.php';
 ?>
