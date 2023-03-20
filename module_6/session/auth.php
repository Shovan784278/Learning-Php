<?php 
    session_start([
        'cookie_lifetime'=> 300 //300sec/60 = 5 min
    ]);

	$error = false;

    session_destroy();

    if(isset($_POST['username']) && $_POST['password']){
        if('admin'==$_POST['username'] && '123456'==$_POST['password']){
            $_SESSION['loggedin']=true;
        }else{
			$error = true; 
            $_SESSION['loggedin']=false;
        }
    }

    if(isset($_POST['logout'])){
        // $_SESSION['loggedin']=false;
        // session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authentication Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style type="text/css">
		body {
			background-color: #f8f9fa;
		}
		.container {
			margin-top: 100px;
		}
		.card {
			border-radius: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		.card-header {
			background-color: #4CAF50;
			color: #fff;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
		}
		input[type="text"],
		input[type="password"] {
			border-radius: 20px;
			padding: 15px;
			font-size: 16px;
			border: none;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			margin-bottom: 20px;
		}
		input[type="text"]:focus,
		input[type="password"]:focus {
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			font-size: 18px;
			padding: 15px 30px;
			border-radius: 20px;
			border: none;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			cursor: pointer;
		}
		input[type="submit"]:hover {
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h2 class="text-center">Authentication Form</h2>
					</div>
                    <div class="card-body">
						<?php 
                          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
                            echo "Heyy Admin! welcome!";
                        }else{
                            echo "Heyy Admin! login below";
                        }
                        ?>
					</div>
					<div class="card-body">
                        <?php 
								if($error){
									echo "<blockquote> Username and Password didn't match! </blockquote>";
								}
                                if(isset($_SESSION['loggedin'])==false):
                        ?>

						<form action="#" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-block" value="submit">
							</div>
						</form>
                        <?php 
                            else:
                        ?>
                        
                        <form action="auth.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="logout" value="1">
                                <input type="submit" class="btn btn-block" value="logout">
                            </div>
                        

						</form>

                        <?php 
                            endif;
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   
</body>
</html>
