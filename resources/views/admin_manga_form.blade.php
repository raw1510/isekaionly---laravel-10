<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga | add blog</title>
    <link rel="icon" href="logo\bg-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="admin-wrapper flex flex-row h-screen">
        <div class="admin-nav w-[15%]" id="admin-nav-placeholder">
           @include('components.adminNavbar')
           <!--nav bar loaded from admin-nav.html file-->
        </div>

        <div class="admin-content w-[85%] rounded-tl-[2rem] rounded-bl-[2rem] bg-gray-200">
            <div class="admin-content-wrapper h-full p-4">
                <h1 class="font-bold text-2xl text-black mb-4">Add Manga News</h1>
                <hr class="bg-red-200 h-2 rounded">

                <form action="{{route('manga_news.post')}}" class="my-4" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="form-input">
                            <label class="ext-lg text-black mb-2">Add title :-</label>
                            <input type="text" name="title" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="form-input">
                            <label class="text-lg text-black mb-2">Publishing Date :-</label>
                            <input type="date" name="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="form-input">
                            <label class="ttext-lg text-black mb-2">What's the news ? :-</label><br>
                            <textarea name="content" id="news" cols="50" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        <div class="form-input">
                            <label class="ttext-lg text-black mb-2">Banner image :-</label>
                            <input type="file" name="banner_image" id="thumbnail" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="form-input">
                            <label class="text-black text-[1.5rem]">thumbnail :-</label>
                            <input type="file" name="thumbnail" class="
                            w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="form-input">
                            <input type="submit" name="submit" value="Submit" class="p-2 bg-black text-white rounded-xl" class="w-full px-8 py-3 bg-black text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:bg-gray-800">
                        </div>

                    </div>
                    </form>
            </div>
            {{-- <script>
    $(function(){
      $("#fotter-placeholder").load("footer.php");
    });here is the footer
    </script> --}}
    
        </div>
    </div>
</body>
</html>