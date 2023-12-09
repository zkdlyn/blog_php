<?php

@include 'config.php';

session_start();
$userLoggedin =TRUE;
// checking kung naka login
if(!isset($_SESSION['user_name'])){
   $userLoggedin = FALSE;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <!-- icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
body{
   background-color: #333;
}
.nav{
   display: flex;
   flex-wrap: wrap;
}
.blog-posts{
   margin: 5rem !important;
   padding: 0 5rem ;
   background-color: #fff;
   
}
.container{
   background-color: #fff;
}
.blog-posts .btn{
   display: inline-block;
   padding:5px 10px;
   border: solid #333 1px;
   font-size: 12px;
   color:#333;
   margin:0 5px;

}

.blog-posts .post{
   padding: 3rem 0 0.5rem 0;
   /* border-bottom: 2px solid #333; */
}
a:hover{
   color: crimson;
   text-decoration: underline;
}

.blog-posts .controls{
   margin-top: 3rem;
   
}
.btn:hover{
   color: crimson;
}

.container .content p a{
   color: crimson;
}
.container .content p a:hover{
   text-decoration: underline;
}

hr.solid {
  border-top: 2px solid #333;
}
</style>
<body>
<?php

?>
<!-- alert message after creating, editing, or deleting posts -->
<div class="alert-container">
<?php 
// alert msg will only show pag post = added (yong nasa url)
   if(isset($_REQUEST['post'])){
      if($_REQUEST['post']== "added"){
         echo '<span id="alert-msg" class="alert-msg"> post added successfully.</span>';
      }
      else if($_REQUEST['post']== 'deleted'){
         echo '<span id="alert-msg" class="alert-msg"> post deleted successfully.</span>';
      }else if($_REQUEST['post']== 'edited'){
         echo '<span id="alert-msg" class="alert-msg"> edits added successfully.</span>';
      }
   };?>
</div>
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

<div class="container">
   <div class="content">
      <?php if(!isset($userLoggedin) || empty($userLoggedin)){ // pag nde naka login login lng kita tas else may welcome new post and logout
         echo '<p>you are logged out. <a href="login_form.php">log in</a> or <a href="register_form.php">register</a> to make changes</p>';
      }else{?>
         <h1>welcome, <span><?php echo $_SESSION["user_name"] ?></span></h1>
      <?php }?>
   </div>
</div>
<div class="blog-posts">
   <?php 
   if(mysqli_num_rows($query) > 0){
      while ($row = mysqli_fetch_array($query)) {
         ?>
         <div class="post">
         <?php
         // display 250 characters onli
         $userTitleOutput = nl2br($row['title']);
         $userContentOutput = nl2br($row['content']);
         $preview = substr($userContentOutput, 0, 250);
         echo "<h2>" . $userTitleOutput . "</h2>";
         echo "<p>" . $preview . "...</p>";
         echo "<hr>";
         echo '<a href="view.php?postID=' . $row['postID'] . '" class="">Read More</a>';?>
         <?php if($userLoggedin){ ?>
            <div class="controls">
           <?php echo '<a href="edit.php?postID=' . $row['postID'] . '" class="btn">edit</a>';
            echo '<button class="btn delete-btn" data-postid="' . $row['postID'] . '">delete</button>';
         echo "<br><br>";?>
         
         </div>
         <hr class="solid">
         </div>
        <?php }
      }
   } else {
      $error[] = "no blog posts found.";
   }
   ?>
</div>

<a href="#"><button class="topbtn" title="back to top">^</button></a>
<!--  JS Link -->
<script src="Script.js"></script>
<script>
// time out
document.addEventListener("DOMContentLoaded", function(){
setTimeout(function() {
   var alertMsg = document.getElementById('alert-msg');
   if (alertMsg) {
       alertMsg.style.display = 'none';
   }
}, 5000); });
</script>


</body>
</html>
