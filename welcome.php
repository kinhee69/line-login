<?php
session_start();
require_once('LineLogin.php');

if (!isset($_SESSION['profile'])) {
    header("location: index.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <?php require_once("nav.php"); ?>    

    <main class="container">
    <div class="bg-light p-5 rounded">
	
        <?php 
            if (isset($_SESSION['profile'])) {
                $profile = $_SESSION['profile'];
            }
        ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h3>name : <?php echo $profile->name; ?></h3>
			</div>
			<div class="col-lg-12">
				 <p class="lead">email : <?php echo $profile->email; ?></p>
			</div>
			<div class="col-lg-12">
				 <img src="<?php echo $profile->picture; ?>" width="200">
			</div>
		</div>
		
    </div>
    </main>


</body>
</html>