<?php

	if( isset( $_POST['file_name'] )){
		$file_name = $_POST['file_name'];

		$path = 'storage/'. $file_name;

		$exists = file_exists($path);
		
		if($exists){
			unlink($path);
            echo 'done';
			exit;

		}else{
			echo 'File not found!';
			exit;
          
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class ="container">
	<form action="" method="post">
       
		<input type="text" name="file_name" placeholder="Type file name to delete from storage folder">
		<br>
		<br>

		<button type="submit">Delete File</button>
	</form>
    </div>

</body>
</html>