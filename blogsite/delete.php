<?php

@include 'config.php';
session_start();

if (isset($_REQUEST["postID"])) {
    $postID = $_REQUEST["postID"];
    $select = "SELECT * FROM blog_entry WHERE postID = $postID";
    
    $query = mysqli_query($conn, $select);

    if ($query) {
        $result = mysqli_fetch_array($query);
        if ($result) {
            // delete
            $delete_post_query = "DELETE FROM blog_entry WHERE postID=$postID LIMIT 1";
            mysqli_query($conn, $delete_post_query);
        }
    }
    header("Location: user_page.php?post=deleted");
    exit();
}
?>