<head>
<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<?php 
    $title = "Received";
    require_once 'header.php';
    require_once 'conn.php';
    
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];

    
    $stmt = $conn->prepare("INSERT INTO string_info (message) VALUES (?)");
    $stmt->bind_param("s", $message); 

    if ($stmt->execute()) {
        echo "Message saved";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
	

