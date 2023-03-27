<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="max-w-md mx-auto my-10 bg-white rounded-md overflow-hidden shadow-md">
    <h2 class="text-center font-bold text-2xl py-4 bg-gray-100">Registration Form</h2>
    <form class="px-6 py-4" action="registration.php" method="post">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="first_name">First Name:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" type="text" name="first_name" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="last_name">Last Name:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" type="text" name="last_name" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">Email Address:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="password">Password:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="confirm_password">Confirm Password:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="confirm_password" type="password" name="confirm_password" required>
        </div>
        <div class="flex justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                Register
            </button>
        </div>
    </form>

	<?php
if(isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	
	// check if all fields are filled
	if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
		echo "All fields are required";
	} 
	
	// check if email is valid
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format";
	} 
	
	// check if password and confirm password match
	else if($password != $confirm_password) {
		echo "Password and confirm password do not match";
	} 
	
	// registration successful
	else {
		header("Location: registrationSuccess.php");
		exit();
	}
}
?>

</div>

</body>
</html>

