<!DOCTYPE html>
<html lang="en" data-theme="purestartllc" class="bg-secondary-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PURESTART, LLC</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" /> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <link rel="stylesheet" href="{{ mix('css/purestartllc.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <header class="bg-white">
        <ul>
            <a href="{{ route('HomeSite') }}">
                <img src="{{ asset('img/xlogo-min.png') }}" alt="logo" style="float: left;width:280px;" />
            </a>
            <li>
                <a href="{{ route('HomeSite') }}#contact" class="lato">
                    Contact
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
                <a href="{{ route('AboutSite') }}" class="@if(\Request::route()->getName() == 'AboutSite') 
                        active
                    @endif lato">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('HomeSite') }}" class="@if(\Request::route()->getName() == 'HomeSite') 
                        active
                    @endif lato">Home</a>
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
                        <p class="text-center lato font-semibold">813.607.0944</p>
                    </div>
                    <div class="md:-mt-5">
                        <center>
                            <img src="{{ asset('img/icono-min.png') }}" alt="icono-purestartllc" class="w-10">
                        </center>
                    </div>
                    <div>
                        <p class="text-center lato font-semibold">404.988.1420</p>
                    </div>
                </div>
                <div class="mt:5 md:mt-0 md:flex md:justify-center md:gap-5">
                    <div>
                        <p class="text-center md:justify uppercase lato text-sm">info@purestartllc.com</p>
                    </div>
                    <div>
                        <p class="hidden md:block">|</p>
                        <p class="block text-center md:hidden">-</p>
                    </div>
                    <div>
                        <p class="text-center md:text-justify uppercase lato text-sm">purestartllc@gmail.com</p>
                    </div>
                </div>
                <div class="text-center mt-5 md:mt-0">
                    <p class="uppercase lato">
                        “Nice and Neat, Fresh and Clean”
                    </p>
                    <p class="lato italic text-xs">
                        Copyright &copy; PureStart LLC - Commercial Cleaning - All Rights Reserved. <br /> Do Not Sell My Personal Information.
                    </p>   
                </div>
            </div>
            </div>
    </footer>
    
    <script src="{{ mix('js/purestartllc.js') }}"></script>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
            }
        });
        // window.onload = function () {
        //     scrollSpy('#main-menu', {
        //         sectionClass: '.scrollspy',
        //         menuActiveTarget: '.menu-item',
        //         offset: 100,
        //         scrollContainer: '.scroll-container',
        //         // smooth scroll
        //         smoothScroll: true,
        //         smoothScrollBehavior: function(element) {
        //         console.log('run "smoothScrollBehavior"...', element)
        //         element.scrollIntoView({ behavior: 'smooth' })
        //         }
        //     })
        // }
        // AOS.init({
        //     once:true
        // });
    </script>

    @livewireScripts

</body>
</html>