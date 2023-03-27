<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .login-form {
            margin-top: 50px;
            margin-bottom: 50px;
            background-color: #ffffff;
            padding: 80px;
            border: 1px solid #e6e6e6;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            border: none;
            border-bottom: 1px solid #e6e6e6;
            padding: 10px;
            width: 100%;
        }
        .login-form input[type="email"]:focus,
        .login-form input[type="password"]:focus {
            outline: none;
            border-bottom: 2px solid #337ab7;
        }
        .login-form button[type="submit"] {
            background-color: darkgreen;
            color: #ffffff;
            border: none;
            padding: 10px;
            margin-top: 20px;
            width: 100%;
        }
        .login-form button[type="submit"]:hover {
            background-color: #286090;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-form">
                    <h2 class="text-center">Login Form</h2>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                    </form>

					<?php
	if(isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Check if both fields are filled
		if(empty($email) || empty($password)) {
			echo "Both fields are required";
		} 

		// Check if email and password match
		else if($email != "user@example.com" || $password != "password123") {
			echo "Invalid login credentials";
		} 

		// Login successful
		else {
			header("Location: welcome.php");
			exit();
		}
	}
	?>


                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


