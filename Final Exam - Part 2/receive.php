<head>
<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<?php 
    $title = "Received";
    require_once 'header.php';
    require_once 'conn.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    $message = $_POST['message'];
    
    $message = mysqli_real_escape_string($conn, $message);

    //Execute the query and check for success
// SQL - insert
 
$sql = "INSERT INTO string_info (message) VALUES ('$message')";

// Execute the query and check for success
if (mysqli_query($conn, $sql)) {
    echo "message saved";
} else {
    echo "Error: " . mysqli_error($conn);
}
 }
    
?>
	

