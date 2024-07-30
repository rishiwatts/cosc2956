<head>
<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<?php 
    require_once 'header.php';
    require_once 'conn.php';     	

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $key=  $_POST['delete_key'];
    $sql = "DELETE FROM `string_info` WHERE `string_info`.`string_id` = $key";

    if (mysqli_query($conn, $sql)) {
        echo "Message deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

