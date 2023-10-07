<?php
session_start();
require_once('db.php');
if(isset($_POST) & !empty($_POST)){
 $email = filter_var ( $_POST['email'], FILTER_SANITIZE_EMAIL);
 $password = md5($_POST['password']);

 $sql = "SELECT * FROM `admin` WHERE email=? AND password=? ";
 $stmt = mysqli_prepare($conn, $sql);
 mysqli_stmt_bind_param($stmt,'ss',$email,$password);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_store_result($stmt);

 $count = mysqli_stmt_num_rows($stmt);

 if($count == 1){
  $_SESSION['email'] = $email;
 }else{

  $fmsg = "<div class='fmsg fmg'> An unauthorized failed login attempt was detected </div>";

  
 }
}
if(isset($_SESSION['email'])){
 $smsg = "<h4 class='smsg'>successful entry</h4>";

    header("location: /admin/Dashboard") ;

}
?>
