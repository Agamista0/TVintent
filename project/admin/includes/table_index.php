<?php
    $sql= "SELECT * FROM posts  ORDER BY `posts`.`created_at` DESC    ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
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

            '; } 
        } else {
                echo "There are no posts";
    }

    include "includes/Delete_post.php" 
 ?>

 