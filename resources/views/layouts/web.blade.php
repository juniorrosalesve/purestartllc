<!DOCTYPE html>
<html lang="en" data-theme="purestartllc" class="bg-secondary-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PURESTART, LLC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <link rel="stylesheet" href="{{ mix('css/purestartllc.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    @livewireScripts
</head>
<body>
    <header class="bg-white">
        <img src="{{ asset('img/xlogo-min.png') }}" onclick="location.href='{{ route('HomeSite') }}'" class="cursor-pointer" alt="logo" />
        <div class="main-phone cursor-pointer md:hidden">
            <span class="mdi mdi-format-align-justify" onclick="openNavbar()"></span>
        </div>
        <ul id="xnavbar">
            <li>
                <a href="{{ route('HomeSite') }}" class="@if(\Request::route()->getName() == 'HomeSite') 
                        active
                    @endif lato">Home</a>
            </li>
            <li>
                <a href="{{ route('AboutSite') }}" class="@if(\Request::route()->getName() == 'AboutSite') 
                        active
                    @endif lato">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('ServiceSite') }}" class="@if(\Request::route()->getName() == 'ServiceSite') 
                        active
                    @endif lato">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ route('HomeSite') }}#contact" class="lato">
                    Contact
                </a>
            </li>
        </ul>
    </header>

    {{ $slot }}

    <footer>
        <div class="md:flex md:flex-row bg-white">
            <div class="md:basis-2/6 p-10" style="background-color: #f6f8d8;">
                <h1>LICENSED & INSURED</h1>
                <p>Reliable, Trustworthy & Detail Oriented</p>
                <div class="grid grid-cols-3 mt-2">
                    <a href="https://www.instagram.com/purestartllc/" target="_blank">
                        <span class="mdi mdi-instagram cursor-pointer" style="font-size: 40px;color:#c0ccbe;"></span>
                    </a>
                    <a href="https://www.facebook.com/PureStartLLC/" target="_blank">
                        <span class="mdi mdi-facebook cursor-pointer" style="font-size: 40px;color:#326a58;"></span>
                    </a>
                    <a href="https://twitter.com/PureStartllc" target="_blank">
                        <span class="mdi mdi-twitter cursor-pointer" style="font-size: 40px;color:#344243;"></span>
                    </a>
                </div>
            </div>
            <div class="md:basis-8/12 p-10">
                <div class="md:flex md:justify-center md:gap-5">
                    <div>
                        <center>
                            <img src="{{ asset('img/icono-min.png') }}" alt="icono-purestartllc" class="w-10">
                        </center>
                    </div>
                </div>
                <div class="md:flex md:justify-center md:gap-5">
                    <!-- <div>
                        <a href="tel:+18136070944">
                            <p class="text-center lato font-semibold">813.607.0944</p>
                        </a>
                    </div> -->
                    <div>
                        <a href="tel:+14049881420">
                            <p class="text-center lato font-semibold">404.988.1420</p>
                        </a>
                    </div>
                </div>
                <div class="mt:5 md:mt-0 md:flex md:justify-center md:gap-5">
                    <div>
                        <a href="mailto:info@purestartllc.com">
                            <p class="text-center md:justify uppercase lato text-sm cursor-pointer">info@purestartllc.com</p>
                        </a>
                    </div>
                    <div>
                        <p class="hidden md:block">|</p>
                        <p class="block text-center md:hidden">-</p>
                    </div>
                    <div>
                        <a href="mailto:purestartllc@gmail.com">
                            <p class="text-center md:text-justify uppercase lato text-sm cursor-pointer">purestartllc@gmail.com</p>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-5 md:mt-0">
                    <!-- <p class="uppercase lato">
                        “Nice and Neat, Fresh and Clean”
                    </p> -->
                    <p class="lato italic text-xs">
                        Copyright &copy; PureStart LLC - Commercial Cleaning - All Rights Reserved. <br /> Do Not Sell My Personal Information.
                    </p>   
                </div>
            </div>
            </div>
    </footer>
    
    <script src="{{ mix('js/purestartllc.js') }}"></script>

    <script>
        var showNavbar = false;
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
            }
        });
        
        function openNavbar() {
            const navbar    =   document.getElementById('xnavbar');
            if(!showNavbar)
            {
                document.getElementById('xnavbar').style.display = 'block';
                showNavbar = true;
            }
            else
            {
                document.getElementById('xnavbar').style.display = 'none';
                showNavbar = false;
            }
        }
    </script>
</body>
</html>