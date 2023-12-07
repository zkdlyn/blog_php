<?php

@include 'config.php';

session_start();
// ito yung nagbblock sa access sa viewing ng page na to unless naka login
// tho mukhang papalitan to para pwede maview pero wala yung editing ng posts
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/style-userpage.css"> -->


</head>
<body>
 <!-- dapat eto mag show lng pag naka login
      pwd mo palitan na lang to eme emeng hello lang naman yan 
      tas yung sequence ng posts pa add sa baba ganon
-->

<div class="alert-container">
<!-- <span class="alert-msg"> post successfully added </span> -->
<?php 
// alert msg will only show pag post = added (yong nasa url)
   if(isset($_REQUEST['post'])){
      if($_REQUEST['post']== "added"){
         echo '<span class="alert-msg"> post successfully added </span>';
      };
   };?>
</div>
<div class="container">
   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is a user page</p>
      <a href="create_post.php" class="btn">new post</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
   
</div>

<div class="container">
   

</div>


</body>
</html>