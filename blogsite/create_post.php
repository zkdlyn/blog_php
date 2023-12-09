<?php
@include 'config.php';
session_start();
$userLoggedin =TRUE;
// checking kung naka login
if(!isset($_SESSION['user_name'])){
   $userLoggedin = FALSE;
}
if(!isset($_SESSION['user_name'])){
    header('Location: login_form.php');
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

<!-- nav bar -->
<div class="header">
   <ul class="navbar">
        <li><a href="user_page.php">home</a></li>
      <?php if(!isset($userLoggedin) || empty($userLoggedin)){?>
      <li><a href="login_form.php" class="btn">login</a></li>
         <?php }else{ ?>
      <li><a href="create_post.php">new post</a></li>
      <li><a href="logout.php" >logout</a></li>
      <?php } ?>
   </ul>
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
        <input type="text" required name="title" id="" placeholder="enter title" style="
        width:100%; font-size: 1.5em; margin-top: 0.83em; margin-bottom: 0.83em; margin-left: 0;
        margin-right: 0; font-weight: bold;" maxlength="50"><br>
        <textarea required name="content" id="create_textarea" cols="30" rows="20" placeholder="write a blog entry"></textarea><br>
        <button name="new_post" class="form-btn">save post</button>
        <a href="user_page.php" class="form-btn">cancel</a>
    </form>
</div>
    
</body>
</html>
