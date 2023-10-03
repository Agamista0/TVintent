<?php

    require_once('db.php');

    if (isset($_POST["searchValue"])) {
        $searchValue = $_POST["searchValue"];
      
        // Query the database
        $query = "SELECT * FROM your_table_name WHERE column_name LIKE '%$searchValue%'";
        $result = mysqli_query($conn, $query);
      
        // Display search results
        if (mysqli_num_rows($result) > 0) {
          
        } else {
          echo "<p>No results found.</p>";
        }
      }
      
      mysqli_close($conn);
?>