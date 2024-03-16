<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add custom styles here */
        .anime-card {
            background-color: #f3f4f6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .anime-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="admin-wrapper flex flex-row">
        <div class="admin-nav w-[15%]" id="admin-nav-placeholder">
           <!--nav bar loaded from admin-nav.html file-->
           @include('components.adminNavbar')
        </div>
       
        <div class="admin-content p-5 flex flex-row flex-wrap justify-center items-center w-[85%] rounded-tl-[2rem] rounded-bl-[2rem] bg-gray-200">
            <!-- Anime Card Grid -->
            <div class="title-pagination w-full p-3 flex justify-between">
                <h1 class="text-3xl">Anime news</h1>
                {{$data->links()}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Dynamically generated Anime Cards -->
                @foreach($data as $anime)
                <div class="anime-card p-4 bg-white">
                    <h2 class="text-lg font-semibold mb-2">{{ $anime->title }}</h2>
                    <img src="banner_images/{{ $anime->image_url }}" alt="{{ $anime->title }}" class="mb-4">
                    
                    <div class="flex justify-between mt-4">
                        <a href="{{route('anime.update.articles',$anime->id)}}" class="text-blue-500 hover:text-blue-700">Update</a>
                        <a href="{{route('blogPage.dataFetch',$anime->id)}}" class="text-blue-500 hover:text-blue-700">View</a>

                        <a href="{{route('admin.databse.animeTableDelete',$anime->id)}}" class="text-red-500 hover:text-red-700">Delete</a>
                    </div>
                </div>
            @endforeach

                <!-- End of Dynamically generated Anime Cards -->
            </div>
            <!-- End of Anime Card Grid -->
        </div>
    </div>
</body>
</html>
