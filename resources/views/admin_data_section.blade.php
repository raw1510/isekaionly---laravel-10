<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | isekaionly</title>
    <link rel="icon" href="logo\bg-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
    <div class="admin-wrapper flex flex-row h-screen">
        <div class="admin-nav w-[15%]" id="admin-nav-placeholder">
           <!--nav bar loaded from admin-nav.html file-->
           @include('components.adminNavbar')
        </div>

        <div class="admin-content p-5 flex flex-row justify-center items-center w-[85%] rounded-tl-[2rem] rounded-bl-[2rem] bg-gray-200">
            <div class=" w-full h-full flex items-bottom">
                <!-- Anime Button -->
                <a href="{{route('admin.databse.animeTableFetch')}}" class="w-1/2 m-3 bg-cover bg-no-repeat bg-center hover:bg-dark text-white text-center py-6 rounded-lg transition duration-300 ease-in-out" style="background-image: url('logo/download (1).jpg');">
                    <span class="text-3xl flex justify-center">Anime</span>
                </a>
                <!-- Manga Button -->
                <a href="{{route('admin.databse.mangaTableFetch')}}" class="w-1/2 m-3 bg-cover bg-no-repeat bg-center hover:bg-dark text-white text-center py-6 rounded-lg" style="background-image: url('logo/download.jpg');">
                    <span class="text-3xl w-[10px] ">Manga</span>
                </a>
            </div>
            
        </div>
    </div>
</body>
</html>
