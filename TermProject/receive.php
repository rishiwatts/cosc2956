<?php
require_once './includes/session_start.php';

?>
<?php 
    $title = "Receive";
    require_once './includes/header.php';
    require_once './includes/conn.php';
    ?>

<div class="container" style="margin-top: 100px;">

<?php 


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    
	
    $firstName=mysqli_real_escape_string($conn, $firstName);
    $lastName=mysqli_real_escape_string($conn, $lastName);
    $email = mysqli_real_escape_string($conn, $email);
    $company=mysqli_real_escape_string($conn, $company);
    $password=mysqli_real_escape_string($conn, $password);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	
    $sql = "INSERT INTO `portfolio`(`firstName`, `lastName`, `email`, `company`, `password`, `address`, `city`, `province`) VALUES ('$firstName','$lastName','$email','$company','$hashedPassword','$address','$city','$province')";
	
    if (mysqli_query($conn, $sql)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $email;
        header('Location: projects.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}



?>
<?php 
    require_once './includes/footer.php';
 ?>
