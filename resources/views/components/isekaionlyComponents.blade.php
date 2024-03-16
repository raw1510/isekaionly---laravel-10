<!DOCTYPE html>
<html lang="en">

<head>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "https://isekaionly.site",
  "logo": "https://isekaionly.site/logo/bg-logo.png"
}
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the latest anime news and updates on IsekaiOnly! Stay informed with daily news, reviews, and insights on a wide range of anime genres. Explore the captivating worlds of your favorite anime series and stay connected with the vibrant anime community.">

    <title>isekaionly - Your Source for Anime News</title>
    <link rel="icon" href="logo\bg-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="indexcss.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-slide {
      width: 80%;
    }

    .swiper-slide:nth-child(2n) {
      width: 80%;
    }
    
  </style>
  
</head>

<body>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C4M5ZDFVG5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C4M5ZDFVG5');
</script>

    <script>
                                    // $(window).on('load', function () {
                                    // $('#loading').hide();
                                    // }) 
                                </script>
                                <!--<div id="loading">-->
                                <!--    <img id="loading-image" src="loader.gif" alt="Loading..." />-->
                                <!--</div>-->
    <!--nav bar of the website-->
    <div id="nav-placeholder">
        @include('components.isekaionlyNavbar')
    </div>
    
    
    <div class="body-wrapper lg:w-[95%]">

    
        <div class="swiper mySwiper my-4 mx-2">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="main1 p-4">
                        <div class="animenews-grid grid md:grid-cols-3 md:grid-rows-2 gap-3 h-full grid-rows-3 grid-cols-1">
                            {{-- Loop through each record --}}
                            @foreach($sliderData as $data)
                                <a href="{{route('blogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-1 row-end-2 md:col-span-2 md:row-span-2 bg-[url('{{ asset('thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base md:text-xl lg:text-3xl backdrop-brightness-50 flex p-3 gap-2 w-[100%] mb-2">
                                        <div class="w-[1%] bg-white"></div>
                                        <p class="w-[92%] text-white">{{$data->title}}</p>
                                    </div>
                                </a>
                                @break
                            @endforeach

                            @foreach($sliderData as $index => $data)
                            @if($index == 0)
                                @continue
                            @endif
                            <a href="{{route('blogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-2 row-end-3 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$data->title}}</p>
                                    </div>
                            </a>
                            @break
                            @endforeach

                            
                            @foreach($sliderData as $index => $data)
                            @php
                            $data2 = $sliderData[2];
                            @endphp
                            <a href="{{route('blogPage.dataFetch',$data2->id)}}" class="column flex items-end row-start-3 row-end-4 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/'.$data2->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$data2->title}}</p>
                                    </div>
                            </a>
                            @break
                            @endforeach
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="main1 p-4 w-[100%]">
                        <div class="animenews-grid grid md:grid-cols-3 md:grid-rows-2 gap-3 h-full grid-rows-3 grid-cols-1">
                            {{-- Loop through each record --}}
                            @foreach($MangasliderData as $data)
                                <a href="{{route('MangablogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-1 row-end-2 md:col-span-2 md:row-span-2 bg-[url('{{ asset('thumbnail/manga_thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base md:text-xl lg:text-3xl backdrop-brightness-50 flex p-3 gap-2 w-[100%] mb-2">
                                        <div class="w-[1%] bg-white"></div>
                                        <p class="w-[92%] text-white">{{$data->Manga_title}}</p>
                                    </div>
                                </a>
                                @break
                            @endforeach

                            @foreach($MangasliderData as $index => $data)
                            @if($index == 0)
                                @continue
                            @endif
                            <a href="{{route('MangablogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-2 row-end-3 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/manga_thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$data->Manga_title}}</p>
                                    </div>
                            </a>
                            @break
                            @endforeach

                            
                            @foreach($MangasliderData as $index => $data)
                            @if($index == 0)
                             @continue
                            @endif
                            @php
                            $mangadata2 = $MangasliderData[2];
                            @endphp
                            <a href="{{route('MangablogPage.dataFetch',$mangadata2->id)}}" class="column flex items-end row-start-3 row-end-4 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/manga_thumbnail/'.$mangadata2->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$mangadata2->Manga_title}}</p>
                                    </div>
                            </a>
                            @break
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- <div class="swiper-slide">
                    <div class="main1 p-2">
                        <div class="animenews-grid grid md:grid-cols-3 md:grid-rows-2 gap-3 h-full grid-rows-3 grid-cols-1">
                            @foreach($MangasliderData as $index => $data)
                            <a href="{{route('blogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-1 row-end-2 md:col-span-2 md:row-span-2 bg-[url('{{ asset('thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                <div class="text-base md:text-xl lg:text-3xl backdrop-brightness-50 flex p-3 gap-2 w-[100%] mb-2">
                                    <div class="w-[1%] bg-white"></div>
                                    <p class="w-[92%] text-white">{{$data->Manga_title}}</p>
                                </div>
                            </a>
                            @endforeach

                            @foreach($MangasliderData as $index => $data)
                            <a href="{{route('blogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-2 row-end-3 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$data->Manga_title}}</p>
                                    </div>
                            </a>
                            @endforeach

                            @foreach($MangasliderData as $index => $data)
                            <a href="{{route('blogPage.dataFetch',$data->id)}}" class="column flex items-end row-start-2 row-end-3 md:col-start-3 md:col-end-4 md:row-span-1 h-48 bg-[url('{{ asset('thumbnail/'.$data->image_url) }}')] bg-cover bg-center">
                                    <div class="text-base lg:text-xl backdrop-brightness-50 flex p-3 gap-2 text-white w-[100%] mb-2">
                                        <div class="w-[1%] border-2 bg-white"></div>
                                        <p class="w-[92%]">{{$data->Manga_title}}</p>
                                    </div>
                            </a>
                            @endforeach
                           
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
            
                    <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                spaceBetween: 30,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
            });
            </script>



    </div>

    <div class="anime-news-start">
        <!--anime news for mobile start-->

        <div class="title text-2xl md:text-2xl font-bold mt-4 p-3">
            <p>Top Anime News</p>
        </div>

        <!--anime news for mobile ends-->

        <!--anime news for tablet and laptops start-->

        <div class="anime-news-md ">
            <div class="news1 p-3  my-2">
                @foreach ($topAnimePostsInHomepage as $item)
                    <a href="{{route('blogPage.dataFetch',$item->id)}}" class="mt-[20px] md:flex md:flex-row">
                        <span class="md:w-[45%] lg:w-[40%] mt-[8px]">
                            <img src="banner_images/{{$item->image_url}}" class="md:h-52 h-52 w-[100%] object-cover" alt="">
                        </span>
                        <span class="pl-2 md:w-[55%] lg:w-[60%]">
                            <p class="text-[1.2142rem] md:text-[2.5em] md:leading-10 lg:text-3xl text-black">{{$item->title}}</p>
                            <p class="lg:text-xl my-3">Published on {{$item->Date}}</p>
                        </span>
                    </a>
                @endforeach
            </div>

                        
        <center><a href="{{route('allAnimeNews.homepage')}}"><button onclick="load()" id="load-more" class="bg-white p-3 rounded text-black my-5 btn">See all</button></a></center>

        </div>
    </div>



    
    
    <!--anime news for tablet and laptops ends-->
    <div class="anime-news-start">
        <!--anime news for mobile start-->

        <div class="title text-2xl md:text-xl font-bold mt-4 p-3">
            <p>Top Manga News</p>
        </div>

        <!--anime news for mobile ends-->

        <!--anime news for tablet and laptops start-->

        <div class="anime-news-md ">
            <div class="news1 p-3  my-2">
                @foreach ($topMangaPostsInHomepage as $data)
                    
                    <a href="{{route('MangablogPage.dataFetch',$data->id)}}" class="mt-[20px] md:flex md:flex-row">
                        <span class="md:w-[45%] lg:w-[40%]">
                            <img src="banner_images/manga_banner_images/{{$data->image_url}}" class="md:h-52 h-52 w-[100%] object-cover" alt="">
                        </span>
                        <span class="pl-2 md:w-[55%] lg:w-[60%]">
                            <p class="text-[1.2142rem] md:text-[2.5em] md:leading-10 lg:text-3xl text-black">{{$data->Manga_title}}</p>
                            <p class="lg:text-xl my-3">Published on {{$data->Date}}</p>
                        </span>
                    </a>
                @endforeach
            </div>

    <center><a href="{{route('allMangaNews.homepage')}}"><button class="bg-white p-3 rounded text-black my-5 btn">See all</button></a></center>

        </div>
    </div>
    <!--anime news for tablet and laptops ends-->

    
    <div id="fotter-placeholder">
     @include('components.isekaionly_footer')

    </div>

    
    <script>
        // Get all divs with class "myDiv"
        const ps = document.querySelectorAll('p#summaryid');

        // Loop through each p tag
        ps.forEach((p) => {
            // Get the text content of the p tag and split it into words
            const words = p.textContent.trim().split(' ');

            // Create a new string with only the first 10 words
            const truncated = words.slice(0, 45).join(' ') + '...';

            // Set the text content of the p tag to the truncated string
            p.textContent = truncated;
        });
        // var k = screen.width;
        // console.log(k);
        // if (k > 1024) {
        //     document.getElementById("demo").innerHTML = "<?php //echo substr($screenContent,0,361)
                                                            ?>";
        //     console.log("the krish");
        // }
        // if(k < 769){
        //     document.getElementById("demo").innerHTML = "<?php //echo substr($screenContent,0,250)
                                                            ?>"+" ...";
        // }
        // if(k<427){
        //     document.getElementById("demo").innerHTML = "<?php //echo substr($screenContent,0,150)
                                                            ?>"+" ...";
        // }
        // if(k>321 && k < 425){
        //     document.getElementById("demo").innerHTML = "<?php //echo substr($screenContent,0,70)
                                                            ?>"+" ...";
        // }
        // if(k < 321){
        //     document.getElementById("demo").innerHTML = null;
        // }


        function load() {
            var k = document.getElementById('post-wrapper');
            var btn = document.getElementById('load-more');
            if (k.style.height === 'auto') {
                document.getElementById('post-wrapper').style.height = '23.5rem';
                btn.innerHTML = 'Load More';
                window.location.href = '{{route('allAnimeNews.homepage')}}'
            } else {
                k.style.height = 'auto';
                btn.innerHTML = 'See all';
                console.log("krish mehta the greatest")
            }
        }
        function mangaload() {
            var k = document.getElementById('post-wrapper');
            var btn = document.getElementById('load-more');
            if (k.style.height === 'auto') {
                document.getElementById('post-wrapper').style.height = '23.5rem';
                btn.innerHTML = 'Load More';
                window.location.href = '{{route('allMangaNews.homepage')}}'
            } else {
                k.style.height = 'auto';
                btn.innerHTML = 'See all';
                console.log("krish mehta the greatest")
            }
        }
    </script>

</body>

</html>