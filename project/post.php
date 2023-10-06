<?php 
    require_once('connect.php');
    if(isset($_GET['post_num'])) {
        $id = $_GET['post_num'];
        $sql = "SELECT * FROM posts WHERE id = '$id' ";
        $result = $conn->query($sql);
        $data = mysqli_fetch_assoc($result);  
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/post-view.css">
    <title>Post</title>
</head>

<body>
    <?php include "includes/navbar.php"; ?>

    <div class="container">
        <div class="post-body">
        <!-- <?php echo $data['title']; ?> -->
        <p class="post-title">Lorem ipsum dolor sit amet consectetur</p>
        <!-- <?php echo $data['picture'];?> -->
        <img src="admin/post_pics/651d7e5b82a19_download.jpeg" alt="34e" class="post-picture">
        <!-- <?php echo $data['content']; ?> -->
        <p class="post-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolore laborum nulla alias! Ad commodi mollitia provident aut minima rem veniam labore dolorem porro quibusdam necessitatibus enim tenetur, dicta veritatis.</p>
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
                $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
                include "includes/posts.php"?>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php";?>
    <script src="js/darkmode.js"></script>

</body>

</html>