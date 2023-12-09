<?php
@include 'config.php';
session_start();
$userLoggedin =TRUE;
// checking kung naka login
if(!isset($_SESSION['user_name'])){
   $userLoggedin = FALSE;
}

if (isset($_REQUEST["postID"])) {
    $postID = $_REQUEST["postID"];
    $select = "SELECT * FROM  blog_entry WHERE postID = $postID";
    $result = mysqli_fetch_array(mysqli_query($conn, $select));
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
.new-post-container form div{
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

</style>
<body>
    <!-- nav bar -->
<div class="header">
   <ul class="navbar">
        <li><a href="user_page.php" class="btn">home</a></li>
      <?php if(!isset($userLoggedin) || empty($userLoggedin)){?>
      <li><a href="login_form.php" class="btn">login</a></li>
         <?php }else{ ?>
      <li><a href="create_post.php">new post</a></li>
      <li><a href="logout.php" >logout</a></li>
      <?php } ?>
   </ul>
</div>
    <div class="new-post-container">
        <h3 style="color: #333">/</h3>
        <form action="" method="post">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            $userTitleOutput = nl2br($result['title']);
            $userContentOutput = nl2br($result['content']);
            ?>
            <input type="hidden" name="postID" value="<?php echo $result['postID']; ?>">
            <div type="text" name="title" id="" placeholder="enter title" 
            style="
            width:100%; font-size: 1.5em; margin-top: 0.83em; margin-bottom: 0.83em; margin-left: 0;
            margin-right: 0; font-weight: bold;" maxlength="50"><?php echo $userTitleOutput; ?></div><br>
            <div name="content" cols="30" rows="30"><?php echo $userContentOutput; ?></div><br>
            <a href="user_page.php" class="form-btn">back</a>
        </form>
    </div>
    <a href="#"><button class="topbtn" title="back to top">^</button></a>
</body>
</html>