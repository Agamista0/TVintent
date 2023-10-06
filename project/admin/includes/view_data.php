<?php

    require_once('db.php');

   if (isset($_GET['search'])) {

    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);

    // Modify your SQL query to include the search term
    $query = "SELECT * FROM posts WHERE title LIKE '%$searchTerm%' ORDER BY `posts`.`created_at` DESC "; 
    
    $result = mysqli_query($conn, $query);

    ob_start();

        while ($row = $result->fetch_assoc()) {
            echo '
            <tr>
         
            <td class="txt-oflo" style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; max-width: 200px;  " >'.$row["title"].'</td>
            <td class="txt-oflo">'.$row["created_at"].'</td>

            <form action="Delete_post.php" method="post">
                <td class="txt-oflo"> <a href="new-post.php?Edit_post='.$row['id'].'" class="btn btn-info btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Edit<a> 
                 <a href="?delete_id='.$row['id'].'" class="btn btn-info btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Delete<a>
                 </td>
            </form>

            </tr>
            '; 
        } 

                
        $output = ob_get_clean();
        $numPosts = mysqli_num_rows($result);

        $response = array(
            'html' => $output,
            'numPosts' => $numPosts
        );

        echo json_encode($response);


    }
 ?>

 