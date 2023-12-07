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
    justify-content: center;
    margin: 0 auto;
    padding: 0 10% 10% 10%;
}

.new-post-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
}
.new-post-container h3{
   font-size: 30px;
   text-transform: uppercase;
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
    <h3>add a new post</h3>
    <form action="" method="post">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="title" id="" placeholder="enter title" style="width:100%" maxlength="50"><br>
        <textarea name="content" cols="30" rows="30" placeholder="write a blog entry"></textarea><br>
        <button name="new_post" class="form-btn">save post</button>
        <a href="user_page.php" class="form-btn">cancel</a>
    </form>
    
</div>
    
</body>
</html>