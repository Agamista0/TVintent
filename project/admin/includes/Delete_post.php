<?php
    require_once "db.php";

    if(isset($_GET['delete_id'])) {

        $deleteId = mysqli_real_escape_string($conn, $_GET['delete_id']);
        
        $query = "DELETE FROM posts WHERE id = '$deleteId'";  
        // Execute the query
        $result = mysqli_query($conn, $query);
        header('Location: index.php') ;

    }
    
    mysqli_close($conn);
    
    
?>