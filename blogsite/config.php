<?php

$conn = mysqli_connect('localhost','root','','blog_db');
$sequel =  "SELECT * FROM blog_entry ORDER BY postID DESC";
$query = mysqli_query($conn, $sequel);

// create
if(isset($_REQUEST['new_post'])){
    $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
    $content = mysqli_real_escape_string($conn,$_REQUEST['content']);

    $select = " INSERT INTO blog_entry(title, content) VALUES('$title', '$content')";
    mysqli_query($conn, $select);
    echo $select;
    header("Location: user_page.php?post=added");
    exit();
}

// get post data
if (isset($_REQUEST["postID"])){
    $postID = $_REQUEST["postID"];
    $select = "SELECT * FROM  blog_entry WHERE postID = $postID";
    $result = mysqli_query($conn, $select);
}

// edit
if (isset($_REQUEST["postID"])) {
    $postID = $_REQUEST["postID"];
    $select = "SELECT * FROM  blog_entry WHERE postID = $postID";
    $result = mysqli_fetch_array(mysqli_query($conn, $select));
}



?>
