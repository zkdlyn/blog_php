<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

   <div class="container mt-5">

<!-- Display any info -->
<?php if(isset($_REQUEST['info'])){ ?>
    <?php if($_REQUEST['info'] == "added"){?>
        <div class="alert alert-success" role="alert">
            Post has been added successfully
        </div>
    <?php }?>
<?php } ?>

<!-- Create a new Post button -->
<div class="text-center">
    <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
</div>

<!-- Display posts from database -->
<div class="row">
    <?php foreach($query as $q){ ?>
        <div class="col-12 col-lg-4 d-flex justify-content-center">
            <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $q['title'];?></h5>
                    <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                    <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                </div>
            </div>
        </div>
    <?php }?>
</div>

</div>

</div>

</body>
</html>