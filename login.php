<!DOCTYPE html>
<html lang="en">
   
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      body {
         margin: 0;
         padding: 0;
         font-family: Arial, sans-serif;
         background-image: url('images/1.jpg'); /* Replace 'path_to_your_background_image.jpg' with the actual path to your background image */
         background-size: cover;
         margin-top: -100px;
         background-repeat: no-repeat;
         background-attachment: fixed;
         cursor: pointer; /* Add cursor pointer to indicate that the background is clickable */
      }

      .form-container {
         background-color: rgba(255, 255, 255, 0.8);
         padding: 20px;
         background-image: url('images/1.jpg'); /* Replace 'path_to_your_background_image.jpg' with the actual path to your background image */
         background-size: cover;
         background-repeat: no-repeat;
         background-attachment: fixed;
         border-radius: 0px;
         width: 500px;
         margin: auto;
         margin-top: 230px;
         margin-left: 200px;
      }

      .form-container .message {
         background-color: #ffcccc;
         color: #cc0000;
         padding: 10px;
         margin-bottom: 10px;
         border-radius: 5px;
         display: flex;
         align-items: center;
      }

      .form-container .message i {
         margin-left: auto;
         cursor: pointer;
      }
   </style>
</head>
<body>

<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }

   }else{
      $message[] = 'Incorrect email or password!';
   }

}
?>
   
<div class="form-container">

   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

   <form action="" method="post">
      <h3>Login Now</h3>
      <input type="email" name="email" placeholder="Enter your email" required class="box">
      <input type="password" name="password" placeholder="Enter your password" required class="box">
      <input type="submit" name="submit" value="Login Now" class="btn">
      <p>Don't have an account? <a href="register.php">Register Now</a></p>
   </form>

</div>

<script>
   // Play sound when the background image is clicked
   document.body.addEventListener('click', function() {
      var audio = new Audio('sound/cow.wav'); // Replace 'path_to_your_sound_file.mp3' with the actual path to your sound file
      audio.play();
   });
</script>

</body>
</html>
