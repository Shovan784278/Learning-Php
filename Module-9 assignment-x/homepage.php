<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<header class="bg-white py-4">
  <div class="container mx-auto flex justify-between items-center">
    <div class="logo">
      <a href="/">
        <img src="logo.png" alt="My Blog">
      </a>
    </div>
    <nav class="flex">
      <a class="py-2 px-4 text-gray-700 hover:text-gray-900" href="#">Home</a>
      <a class="py-2 px-4 text-gray-700 hover:text-gray-900" href="#">Blog</a>
      <a class="py-2 px-4 text-gray-700 hover:text-gray-900" href="#">Contact</a>
    </nav>
  </div>
</header>
<section class="bg-gray-100 py-8">
  <div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Latest Blog Post</h2>
    <div class="flex">
      <div class="w-1/2">
        <img src="featured-post.jpg" alt="Featured Post" class="rounded-lg">
      </div>
      <div class="w-1/2 px-4">
        <h3 class="text-lg font-bold mb-2">Title of Featured Post</h3>
        <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit erat vel odio luctus, ut maximus turpis pharetra. Etiam et elementum quam.</p>
        <a class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" href="#">Read More</a>
      </div>
    </div>
  </div>
</section>

</body>
</html>

