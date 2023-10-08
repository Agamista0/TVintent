<?php 
    require_once('connect.php');
    if(isset($_GET['id'])) {
        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
        $sql = "SELECT * FROM posts WHERE id = '$id' ";
        $result = $conn->query($sql);
        $data = mysqli_fetch_assoc($result);  
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="/">
    <link rel="icon" href="" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/post-view.css">
    <title>Post</title>
</head>

<body>
    <?php include "includes/navbar.php"; ?>

    <div class="container">
        <div class="post-body">
        <p class="post-title"><?php echo $data['title']; ?></p>
        <img src="../admin/<?php echo $data['picture'];?>" alt="34e" class="post-picture">
        <p class="post-paragraph"><?php echo $data['content']; ?></p>
            <h2 class="contact-p-header">
                Reach out to us
            </h2>
            <p class="contact-p">
                Reach out to us at <a href="">email$email.com</a>
            </p>
        </div>
        <div class="second-column">
            <div class="Related">
                Related Posts
            </div>
            <div class="related-posts">
                <?php
                $sql = "SELECT * FROM posts ORDER BY RAND() DESC LIMIT 3";
                include "includes/posts.php"?>
            </div>
        </div>
    </div>
    
    <?php include "includes/footer.php";?>
    <script src="js/darkmode.js"></script>
    
</body>

</html>