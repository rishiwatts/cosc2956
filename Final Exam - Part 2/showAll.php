<head>
<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<?php 
    $title = "View Records";
    require_once 'header.php';
    require_once 'conn.php';     	
?>
<?php
	$sql = "SELECT * FROM string_info WHERE 1";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["string_id"] . " ";
                echo $row["message"] . "<br>";
            }
        }
        else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    } 




?>
<form action="deleteRecord.php" method="post">
<input type="number" name="delete_key" placeholder="Enter a string id" />
<button type="submit">Delete</button>
</form>
