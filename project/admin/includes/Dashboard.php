<?php
    ob_start();

    require_once "db.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 

    } 
    
    if(!isset($_SESSION['email']) || empty($_SESSION['email'])){

        header("location: login");
  
        exit;
      }
    $email = $_SESSION['email'];

    $sql_posts = " SELECT * FROM posts ORDER BY created_at DESC ";
    $query_posts = mysqli_query($conn, $sql_posts);

?> 