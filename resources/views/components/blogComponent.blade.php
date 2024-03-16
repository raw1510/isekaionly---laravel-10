<!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>@yield('head.title')</title>
                                <link rel="icon" href="logobg-logo.png" type="image/x-icon">
                                <link rel="stylesheet" href="style.css">
                                <script src="https://cdn.tailwindcss.com"></script>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                                <style>
                                @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
                                @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
                                @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

                                body{
                                    -webkit-user-select: none; /* Safari */
                                    -ms-user-select: none; /* IE 10 and IE 11 */
                                    user-select: none; /* Standard syntax */
                                }
                                .question{
                                    font-family: 'Lobster', cursive;
                                }
                                .content-blog{
                                    font-family: 'Raleway', sans-serif;
                                }
                                .r-title{
                                    font-family: 'Roboto', sans-serif;
                                }
                                #loading {
                            position: fixed;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            left: 0;
                            opacity: 0.7;
                            background-color: #fff;
                            z-index: 99;
                            }

                            #loading-image {
                            z-index: 100;
                            }
                                </style>
                                <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                            </head>
                            <body onselectstart="return false">
                            <script language="JavaScript">
                                document.oncontextmenu =new Function("return false;")
                                </script>    
                                <script>
                                    function myFunction() {
                                    var x = document.getElementById("newmenu");
                                    if (x.style.display === "block") {
                                        x.style.display = "none";
                                    } else {
                                        x.style.display = "block";
                                    }
                                    }
                                    function myFunction() {
                                    $("#newmenu").slideToggle(300);
                                }
                                </script>
                                <div id='nav-placeholder'>
                                    @include('components.isekaionlyNavbar')
                                </div>
                            
                                <div class="margin w-[100%] flex flex-col items-center">
                                <div class="inner-margin md:w-[89%] lg:w-[85%] xl:w-[80%]">
                                    <div class="title-con mt-10">
                                    <div class="date flex flex-col">
                                        <p class="md:text-xl opacity-60 text-center lg:text-3xl">Published on 
                                        
                                            @yield('Date')
                                        
                                        </p>
                                        <h1 class="font-bold font-serif text-3xl md:text-4xl text-center lg:text-5xl">
                                            
                                            @yield('title')
                                            @yield('mangatitle')
                                        
                                        </h1>
                                    </div>
                                    </div>
                                    <div class="banner p-4 h-60 md:h-[23rem] lg:h-[29rem] flex justify-center">
                                    @yield('banner_image')
                                    </div>

                                    <div class="rank p-4">
                                    <div class="ranked1">
                                        <div class="r10">
                                       <p class="content-blog lg:text-2xl md:text-lg mt-5">@yield('content_article')</p>
                                        </div>
                                    </div>
                                    </div>
                                    

                                    <div class="people who read this also read">

                                    </div>
                                </div>
                                </div>
                                
                                <div id="fotter-placeholder">
                                    @include('components.isekaionly_footer')
                                </div>
                                
                                {{-- <script>
                                $(function(){
                                $("#fotter-placeholder").load("../footer2.php");
                                });
                                </script> --}}
                                
                            </body>
                            </html>