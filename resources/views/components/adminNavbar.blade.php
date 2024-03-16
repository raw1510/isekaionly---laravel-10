<div class="logo w-fit">
    <a href="{{route('admin.dashboard')}}"><img src="logo/bg-logo.png" alt="logo" class=""></a>
</div>
<div class="admin-profile h-64 flex flex-col justify-center items-center">
    {{-- <div class="admin-profile-pic flex justify-center items-center">
        <img src="logo/kon.jpg" alt="admin-pic" class="rounded-full w-32 h-32 ">
    </div> --}}
    <div class="admin-profile-pic flex justify-center items-center">
        <img src="logo/kon.jpg" alt="admin-pic" class="rounded-full w-32 h-32 object-cover">
    </div>
    
    <span class="admin-professon">CEO</span>
    <span class="admin-name text-blue-900 font-extrabold font-mono">Krish mehta</span>
</div>
<div class="admin-buttons  flex flex-col justify-center items-center group">
    {{-- <a class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Dashboard</span></a> --}}
    <a href="{{route('anime_news.homepage')}}" class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Anime news</span></a>
    <a href="{{route('manga_news.homepage')}}" class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Manga news</span></a>
    <a href="{{route('admin.data.fetch')}}" class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Database</span></a>

    <a href="{{route('DeleteSession.logout')}}" class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Logout</span></a>

    <a href="{{route('isekaionly.homepage')}}" class="my-2 p-2 w-44 bg-slate-200"><i class="fa-sharp fa-solid fa-house-user mx-1 group-hover:animate-pulse"></i><span class="mx-2">Go to Website</span></a>
</div>
{{-- <script>
    function dboard(){
        window.open('dashboard.php');
    }
    function add_news_blog(){
        window.open('admin-form.php');
    }
    function database(){
        window.open('http://localhost/phpmyadmin/');
    }
    function top10(){
        window.open('admin-top10-form.php');
    }
</script> --}}