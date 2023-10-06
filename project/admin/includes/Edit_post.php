<?php

    require_once "db.php";


    if(isset($_GET['Edit_post'])) {

        $id = mysqli_real_escape_string($conn, $_GET['Edit_post']);
       
        $query = "SELECT * FROM posts WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $title = $row['title'];
            $content = $row['content'];


        }}
    else {
        $title="" ;
        $contect = "";
    }   
    if(isset($_POST['submit'])){
        $query = "DELETE FROM posts WHERE id = '$id'";  
        // Execute the query
        $result = mysqli_query($conn, $query);
        header('Location: index.php') ;
    }
    
    mysqli_close($conn);

   ?>