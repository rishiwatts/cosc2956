<head>
<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<?php 
    require_once 'header.php';
    require_once 'conn.php';     	


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = $_POST['delete_key'];

    
    $stmt = $conn->prepare("DELETE FROM `string_info` WHERE `string_info`.`string_id` = ?");
    $stmt->bind_param("i", $key);

    if ($stmt->execute()) {
        echo "Message deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
   
?>

