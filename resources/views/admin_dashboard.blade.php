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

        <div class="admin-content w-[85%] rounded-tl-[2rem] rounded-bl-[2rem] bg-gray-200">
            <div class="admin-content-wrapper h-full p-4">

                <div class="graph-and-status flex flex-row gap-9">
                    <div class="p-4 status bg-[#0f1322] w-[35rem] h-[20rem] rounded-3xl">
                        <h1 class="text-white text-[40px] font-bold mb-4">Total Posts:- {{$total_post_count}}</h1>
                        <div class="flex flex-col gap-5">
                            <p class="text-gray-300 text-3xl">Total Anime Posts: {{$anime_count}}<span class="text-white"></span></p>
                            <p class="text-gray-300 text-3xl">Total Manga Posts: {{$manga_count}}<span class="text-white"></span></p>
                        </div>
                    </div>
                    <div class="status bg-[#95cfd9] w-full h-[20rem] rounded-3xl">

                    </div>
                </div>
                
                <div class="admin-user-data w-full bg-[#d9bca8] h-72 my-4 rounded-3xl">

                </div>

            </div>
        </div>
    </div>
</body>
</html>

<!--https://berrydashboard.io/dashboard/analytics-->