<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Isekaionly</title>
    <link rel="icon" href="logo\bg-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<script language="JavaScript">
    /*document.oncontextmenu =new Function("return false;")*/
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
        
      </script>
    <div id="nav-placeholder">
        @include('components.isekaionlyNavbar')
    </div>

    <div class="container border-red-400 h-[26rem] md:h-[550px] flex md:p-6 w-[100%]">
        <div class="anime-png hidden md:block border-yellow-500 w-[40%]">
            <img src="logo/contact.png" alt="contact png" class="md:flex hidden lg:block items-end w-[80%] h-[100%] object-cover">
        </div>
        <div class="form-contact hidden lg:block md:block border-blue-500 w-[60%]">
            <h1 class="text-3xl text-black text-center my-2">Contact Us</h1>
            <!--this is for large screen only-->
            <form action="{{route('contactUsAddData')}}" method="post" class="flex flex-col px-10 py-10">
                @csrf
                @if ($errors->any())
                    <script>
                        var errorMessage = "";
                        @foreach ($errors->all() as $error)
                            errorMessage += "{{ $error }}\n";
                        @endforeach
                        alert(errorMessage);
                    </script>
                @endif
                <div class="border-b-2 border-gray-400">
                    <input type="text" name="name" id="name" placeholder="Enter your full name*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]">
                </div>
                <div class="border-b-2 border-gray-400">
                    <input type="email" name="email" id="email" placeholder="Enter your email*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]">
                </div>
                
                <div class="border-b-2 border-gray-400">
                    <textarea name="message" id="msg" placeholder="Enter your message*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]"></textarea>
                </div>
                <button  name ="btn-contact" onclick="validateEmail()" class="p-2 bg-black text-white rounded-md my-4">参加する</button>
                <p id="error-message"></p>
            </form>
        </div>
        <div class="form-contact lg:hidden md:hidden w-[100%] border-blue-500">
            <!--this is for mobile device only-->
            <div class="wrapp flex justify-center md:hidden lg:hidden">
                    <div class="contact flex flex-col w-[90%] shadow-xl my-5 rounded-3xl">
                        <h1 class="my-4 mx-2 text-3xl font-sans">Get in Touch</h1>
                        <form action="" method="post" class="p-2 flex flex-col">
                            <div class="border-b-2 border-gray-400">
                                <input type="text" name="name" id="name" placeholder="Enter your full name*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]" >
                            </div>
                            <div class="border-b-2 border-gray-400">
                                <input type="email" name="email" id="email" placeholder="Enter your email*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]" >
                            </div>
                            <div class="border-b-2 border-gray-400">
                                <textarea name="message" id="msg" placeholder="Enter your message*" class="bg-transparent placeholder-black outline-none my-4 w-[100%]" ></textarea>
                            </div>
                            <button name ="btn-contact" onclick="validateEmail()" class="p-2 bg-black text-white rounded-md my-4">参加する</button>
                            <p id="error-message"></p>
                        </form>
                    </div>
                </div>
        </div>

    </div>


    <div id="fotter-placeholder" class="mt-[100px]">
        @include('components.isekaionly_footer')
    </div>
    
</body>
</html>

