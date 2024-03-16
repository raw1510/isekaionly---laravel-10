<nav class="bg-white">
    <header class="flex flex-row flex-wrap justify-between items-center">
        <div class="logo p-1 w-[50% ]">
            <a href="{{route('isekaionly.homepage')}}"><img src="{{ asset('logo/logo.jpg') }}" class="lg:w-[15rem] w-32 md:w-40" alt=""></a>
        </div>
                  <div class="ham-search flex flex-row justify-end w-[50%] mr-3 p-4 cursor-pointer md:hidden"  onclick="myFunction()">
                      <span><i class="fa-solid fa-bars"></i></span>
                  </div>
        <div class="side-nav hidden h-fit relative md:block md:static md:mx-6 w-[100%] md:w-[50%]" id="newmenu">
            <ul class="md:flex md:justify-end md:space-x-5 ">
                <a href="{{route('allAnimeNews.homepage')}}" class="text-center"><li class="cursor-pointer py-2 lg:text-xl">Top Anime News</li></a>
                <hr>
                <a href="{{route('allMangaNews.homepage')}}" class="text-center"><li class="cursor-pointer py-2 lg:text-xl">Top manga news</li></a>
                <hr>
                {{-- <a href="{{route('allAnimeReviews.homepage')}}" class="text-center"><li class="cursor-pointer py-2 lg:text-xl">Top10s</li></a> --}}
                <a href="{{route('contactUsView')}}" class="text-center"><li class="cursor-pointer py-2 lg:text-xl">Contact Us</li></a>
            </ul>
        </div>
    </header>
</nav>

<script>
    function myFunction() {
            $("#newmenu").slideToggle(300);
        }
        $(function() {
            $("#nav-placeholder").load("nav.php");
        });
    </script>

<script>
    function myFunction() {
            $("#newmenu").slideToggle(300);
        }
        $(function() {
            $("#nav-placeholder").load("nav.php");
        });
    </script>