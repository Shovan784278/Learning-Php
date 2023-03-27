<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-Dzi5UvczcJFV+dEweJ8r+i/bKTWvLJ11omGnbzgX9AaQ6MvOksdQRvoCXaDp6p0r" crossorigin="anonymous">
	<style>
		/* Custom CSS for the page */
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		
		.card {
			border-radius: 2;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
			border: none;
			padding: 80px;
		}

		.card-body{
			color: darkgreen;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h1 class="card-title text-center">Welcome to my website!</h1>
				<p class="card-text text-center">You have successfully logged in.</p>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-4tJmXaPXDwVphlqenNatG4aR1NsMqHZTdVuQ2BZKmjqZ6hW/hKQVDDlQw/EhzhYg5Z5R6RS7KfJGz5+oV+CDGw==" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-klWUAe8tVj2DdloAz7VX9WxuS7VdA1nTtv1s3sLTG4s7IVcJiK21s3zX9kMfrCOJ" crossorigin="anonymous"></script>
</body>
</html>
