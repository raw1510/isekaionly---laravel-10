<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Anime News</title>
    <link rel="icon" href="logo\bg-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- <script>
        function myFunction() {
            var x = document.getElementById("newmenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script> --}}
    <div id="nav-placeholder">
        @include('components.isekaionlyNavbar')
    </div>


    <div class="title text-2xl md:text-xl font-bold mt-4 p-3">
        <p>Top Anime News</p>
    </div>
    <div class="text wrapper-anime flex flex-row md:flex-row md:p-3 md:pr-0">
        <div class="wrapper1 md:w-[77%] lg:w-[93%]">

<div class="text wrapper-anime flex flex-row md:flex-row md:p-3 md:pr-0">
    <div class="wrapper1 md:w-[77%] lg:w-[77%]">
        <div class="anime-content md:my-2 p-2 md:w-[100%] md:border-2 border-gray-500">
            @foreach ($data as $item)
                <div class="anime-content md:my-2 p-2 md:w-[100%] md:border-2 border-gray-500">
                    <a href="{{route('blogPage.dataFetch',$item->id)}}" class="md:flex md:flex-row">
                        <div class="anime-image md:p-0 h-54 md:w-[50%] lg:w-[50%] md:h-38 lg:h-56">
                            <img src="thumbnail/{{$item->thumbnail_url}}" class="w-[100%] h-full object-cover" alt="">
                        </div>
                        <div class="anime-news p-2 md:w-[50%] lg:w-[50%]">
                            <p class="font-semibold text-xl lg:text-3xl ">{{$item->title}}</p>
                            <p class="text-sm mt-2 ">Publish on  {{$item->Date}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

   

<div class="google-ads md:w-[23%] ml-2 hidden md:block lg:block md:mt-2">
    <a href="https://www.hotstar.com"><img src="{{ asset('ads/ad1.jpg') }}" alt="Hotstar"></a>
    <a href="https://www.hotstar.com"><img src="{{ asset('ads/ad1.jpg') }}" alt="Hotstar" class="mt-4"></a>
</div>
</div>
<div class="pagination flex justify-center mb-4">
    {{$data->links()}}    
</div>
<div id="fotter-placeholder">
    @include('components.isekaionly_footer')
</div>
</body>
</html>