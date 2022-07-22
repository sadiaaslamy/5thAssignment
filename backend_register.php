<?php

$user_name = $_POST['user_name'];
$user_email= $_POST['user_email'];
$user_age= $_POST['user_age'];
$user_password= $_POST['user_password'];

$picture = $_FILES['user_picture'];

$file_name = $picture['name'];
$file_tmp_name = $picture['tmp_name'];
$file_type = $picture['type'];
$file_size = $picture['size'];

?>
<html>
    <head>
        <title>Info</title>
        <link rel="stylesheet" href="style.css">
</head>    
       <div class="container">
      
        <h2 class="title">Your Information</h2>
        <div class="info">
          <img class ="image" src="<?php echo "storage/" . $file_name ?>">
          <h3>Name: <?php echo $user_name?></h3>
          <h3>Email: <?php echo $user_email?></h3>
          <h3>Password: <?php echo $user_password?></h3>
          <h3>Age: <?php echo $user_age?></h3>
        </div>
        <button>
        <a href="delete.php?filename=<?php echo $file_name ?>">Delete My photo</a>
        </button>
 
</div>
</html>

