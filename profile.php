<?php
	require('main.php');

	if(!is_loggedin()){
		header('location: dashboard.php');
	}

	$auth_user = $_SESSION['auth_user'];
	$name = $auth_user['name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>

      <div class="container">
       <h1>Welcome <?php echo $auth_user['name'] ?> To your Profile</h1>
       <a href="logout.php">Click here to logout!</a>
        </div>
</body>
</html>

