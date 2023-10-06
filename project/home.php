

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/homestyle.css">
    <title>Home</title>
    <link rel="icon" href="" type="image/x-icon">

</head>
<body>

<?php include "includes/navbar.php";?>

<div class="body-cotanier">
<?php include "includes/first-row.php";?>

   <div class="second-row">
        <div class="second-row-paragraph-left">
            <p class="second-row-paragraph-left-header">
                The Advantages of Working With us
            </p>
            <ul>
            <li class="bullet-points">Lorem ipsum dolor sit, nsectetur  </li>
            <li class="bullet-points">Lorem ipsum dolor sit, amet consectetur  </li>
            <li class="bullet-points">Lorem ipsum dolor sit, amet   </li>
            <li class="bullet-points">Lorem ipsum dolor sit, amet consectetur  </li>
            <li class="bullet-points">Lorem ipsum doconsectetur  </li>
            </ul>
        </div>
        <div class="second-row-paragraph-right-container">
        <h2>distribute and monetize channels</h2>
        <p class="second-row-paragraph-right">Lorem ipsum dolor sit, amet Consequatur nobis accusamus minus blanditiis maxime necessitatibus   consectetur adipisicing elit. Consequatur nobis accusamus minus blanditiis maxime necessitatibus</p>
        </div>
    </div>
    
    </div>
    
    <div class="third-row">
    <p class="third-row-header">Our Services</p>

    <div class="third-row-content">
        <img src="assets/icons/1.jpg" class="third-row-img">


        <div class="third-row-desc">
        <p class="third-row-desc-header">Go for more! Reach, revenues & insights.</p>
        <div class="third-row-desc-paragraphs-container">
            <div class="services-paragraphs"><p class="third-row-desc-paragraphs-header">1- Create channels</p><p class="third-row-desc-paragraphs">Create linear channels and distribute over satellite, fiber or IP-based delivery.</p></div>
            <div class="services-paragraphs"><p class="third-row-desc-paragraphs-header">2- Manage VOD workflows</p><p class="third-row-desc-paragraphs">Control your entire VOD asset processing workflow with an easy-to-use dashboard & intuitive UI.</p></div>
            <div class="services-paragraphs"><p class="third-row-desc-paragraphs-header">3- Distribute globally</p><p class="third-row-desc-paragraphs">Distribute your channels across the globe on TV or OTT multi-screen devices. Reach over 200 million CTV households.</p></div>
            <div class="services-paragraphs"><p class="third-row-desc-paragraphs-header">4- Monetize content</p><p class="third-row-desc-paragraphs">Generate new revenue streams with Amagi THUNDERSTORM server-side ad insertion. Join the biggest CTV marketplace -Amagi ADS PLUS, and embrace end-to-end approach to ad sales.</p></div>
        </div>
    </div>
</div>
</div>
    
    
</div>

<div class="body-cotanier">

    <div class="fourth-row">
        <p class="explore">explore</p>
        <div class="fourth-row-content">
        <?php
            $sql = "SELECT * FROM posts ORDER BY id ASC LIMIT 3";
        include "includes/posts.php";
        
        ?>

        </div>
    </div>

</div>
<?php include "includes/footer.php";?>
<script src="js/darkmode.js"></script>

</body>
</html>

