<?php
@include 'config.php';
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

    <input type="text" name="blog-entry" id="" placeholder="enter title" style="width:100%" maxlength="50"><br>
    <textarea id="" cols="30" rows="20" placeholder="write a blog entry"></textarea><br>
    <input type="submit" name="submit" value="save" class="form-btn">
    </form>
    
</div>
    
</body>
</html>