<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-white font-bold">My Blog</a>
            <form action="#" method="get">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Search..." class="py-2 px-3 rounded-md border-gray-500 focus:outline-none focus:border-gray-700">
                    <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-3 ml-2 rounded-md">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mx-auto py-6">
        <div class="flex flex-wrap -mx-4">
            <!-- Blog post -->
            <div class="w-full lg:w-1/2 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://source.unsplash.com/random/800x600" alt="Blog post image" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-bold mb-2"><a href="#" class="text-gray-900 hover:text-gray-700">My First Blog Post</a></h2>
                        <p class="text-gray-700 text-base mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis ante ac augue tincidunt lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eleifend, quam a blandit sodales, nunc dolor facilisis tortor, vitae cursus metus turpis eu libero.</p>
                        <a href="#" class="inline-block bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded-md">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <!-- End blog post -->
        </div>
    </div>

    <!-- Sidebar -->
    <div class="bg-gray-100 py-6">
        <div class="container mx-auto px-4">
            <h3 class="text-lg font-bold mb-4">Categories</h3>
            <ul class="mb-6">
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Category 1</a></li>
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Category 2</a></li>
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Category 3</a></li>
            </ul>
            <form action="#" method="get">
    <label for="search" class="block text-gray-700 font-bold mb-2">Search</label>
    <div class="flex items-center">
        <input type="text" name="search" placeholder="Search..." class="py-2 px-3 rounded-md border-gray-500 focus:outline-none focus:border-gray-700">
        <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-3 ml-2 rounded-md">
            Search
        </button>
    </div>
</form>

