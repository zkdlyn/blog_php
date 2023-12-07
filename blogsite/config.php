<?php

$conn = mysqli_connect('localhost','root','','blog_db');
$sequel =  "SELECT * FROM data";
$query = mysqli_query($conn, $sequel);
// create
if(isset($_REQUEST['new_post'])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

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
    mysqli_query($conn, $select);

    header("Location: user_page.php");
    exit();
}
//
?>