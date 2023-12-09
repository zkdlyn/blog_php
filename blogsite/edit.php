<?php
@include 'config.php';
session_start();

if (isset($_REQUEST["postID"])) {
    $postID = $_REQUEST["postID"];
    $select = "SELECT * FROM  data WHERE postID = $postID";
    $result = mysqli_fetch_array(mysqli_query($conn, $select));
}

if(isset($_POST['update_post'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    $postID = $_POST['postID'];

    $updateQuery = "UPDATE data SET title='$title', content='$content' WHERE postID=$postID";
    mysqli_query($conn, $updateQuery);

    header("Location: user_page.php?post=edited");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
body{
    justify-content: center;
    align-content: center;
    height: 100vh;
}
.container .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .btn:hover{
   background: crimson;
}

.new-post-container{
    background: #333;
    min-height: 100vh;
    display: block;
    position: relative;
    justify-content: center;
    margin: 28px 0px 0px 0px;
    padding: 0 10% 10% 10%;
}

.new-post-container form{
   padding:20px;
   border-radius: 5px;
   background: #fff;
}
.new-post-container h3{
   font-size: 30px;
   margin-bottom: 10px;
   padding-top: 10px;
   color:white;
}
.new-post-container form textarea{
    width: 100%;
}
.new-post-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   font-size: 20px;
   cursor: pointer;
   padding: 2px 5px;
}

.new-post-container form .form-btn:hover{
   background: crimson;
   color:#fff;
}
/* mema p lng tlg design neto */
</style>
<body>
    <div class="container">
        <a href="user_page.php" class="btn">home</a>
        <a href="logout.php" class="btn">logout</a>
    </div>
    <div class="new-post-container">
        <h3>edit your post</h3>
        <form action="" method="post">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="hidden" name="postID" value="<?php echo $result['postID']; ?>">
            <input type="text" required name="title" id="" value="<?php echo $result['title']; ?>" placeholder="enter title" 
            style="
            width:100%; font-size: 1.5em; margin-top: 0.83em; margin-bottom: 0.83em; margin-left: 0;
            margin-right: 0; font-weight: bold;" maxlength="50"><br>
            <textarea name="content" id="edit_textarea" cols="30" rows="20" required placeholder="write a blog entry"><?php echo $result['content']; ?></textarea><br>
            <button name="update_post" class="form-btn">save post</button>
            <a href="user_page.php" class="form-btn">cancel</a>
        </form>
    </div>
</body>
</html>