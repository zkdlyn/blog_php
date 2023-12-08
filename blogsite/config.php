<?php

$conn = mysqli_connect('localhost','root','','blog_db');
$sequel =  "SELECT * FROM data ORDER BY postID DESC";
$query = mysqli_query($conn, $sequel);
// create
if(isset($_REQUEST['new_post'])){
    $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
    $content = mysqli_real_escape_string($conn,$_REQUEST['content']);

    $select = " INSERT INTO data(title, content) VALUES('$title', '$content')";
    mysqli_query($conn, $select);
    echo $select;
    header("Location: user_page.php?post=added");
    exit();
}

// get post data
if (isset($_REQUEST["postID"])){
    $postID = $_REQUEST["postID"];
    $select = " SELECT * FROM  data WHERE postID = $postID";
    $result = mysqli_query($conn, $select);
}

//  delete post
if (isset($_REQUEST["delete"])){
    $postID = $_REQUEST["postID"];
    $select = " DELETE FROM data WHERE postID = $postID";
    $query = mysqli_query($conn, $select);

    header("Location: user_page.php");
    exit();
}
//
?>
