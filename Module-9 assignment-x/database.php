<?php
// Establish database connection
$db_host = 'localhost';
$db_name = 'myblog';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if the database connection was successful
if (!$conn) {
  die('Database connection error: ' . mysqli_connect_error());
}

// Fetch blog posts from the database
$query = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 3";
$result = mysqli_query($conn, $query);

// Check if there are any blog posts to display
if (mysqli_num_rows($result) > 0) {
  // Loop through the blog posts and display them
  while ($post = mysqli_fetch_assoc($result)) {
?>
<div class="bg-white rounded-lg shadow-md">
  <a href="#">
    <img src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-48 object-cover">
  </a>
  <div class="p-6">
    <h3 class="font-bold text-gray-800 text-xl mb-2"><a href="#"><?php echo $post['title']; ?></a></h3>
    <p class="text-gray-600"><?php echo $post['excerpt']; ?></p>
  </div>
</div>
<?php
  }
} else {
  echo 'No blog posts found.';
}

// Close the database connection
mysqli_close($conn);
?>
