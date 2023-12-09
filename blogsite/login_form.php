<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
   $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
   $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : '';
   $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
         exit();

   }else{
      $error[] = 'incorrect email or password!';
      // echo "Number of rows: " . mysqli_num_rows($result) . "<br>";
      // print_r(mysqli_fetch_array($result)); pancheck
   }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
.form-container a:hover{
   text-decoration: underline;
}
</style>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>log in</h3>
      <?php
      // check if error is declared n empty then display error msg
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="log in" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
      <p><a href="user_page.php">continue without logging in</a></p>
   </form>

</div>

</body>
</html>
