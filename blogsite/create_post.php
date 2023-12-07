<?php
@include 'config.php';
session_start();
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
.new-post-container{
    background: #333;
    min-height: 100vh;
    display: block;
    justify-content: center;
    padding:10% 20% 10% 20%;
}

.new-post-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
}
.new-post-container form textarea{
    width: 100%;
}

</style>
<body>
<div class="container">
    <a href="user_page.php" class="btn">home</a>
    <a href="logout.php" class="btn">logout</a>
</div>
<div class="new-post-container">
    <form action="" method="post">
    <h3>add a new post</h3>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
    ?>

    <input type="text" name="title" id="" placeholder="enter title" style="width:100%" maxlength="50"><br>
    <textarea name="content" cols="30" rows="20" placeholder="write a blog entry"></textarea><br>
    <button name="new_post" class="form-btn">save post</button>
    <a href="user_page.php" class="form-btn">cancel</a>
    </form>
    
</div>
    
</body>
</html>