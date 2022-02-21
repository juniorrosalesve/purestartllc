<!DOCTYPE html>
<html lang="en" data-theme="purestartllc" class="bg-secondary-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PURESTART, LLC</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <link rel="stylesheet" href="{{ mix('css/purestartllc.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <header class="sticky top-0 z-50" >
        <nav class="bg-white border-b-2 border-primary px-2 sm:px-4 py-2.5">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ route('HomeSite') }}" class="flex">
                    <img src="{{ asset('img/xlogo-min.png') }}" style="width: 256px;" />
                </a>
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium" id="main-menu">
                        <li>
                            <a href="{{ route('HomeSite') }}" class="@if(\Request::route()->getName() == 'HomeSite') 
                                    active
                                @endif menu-item uppercase block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-none md:bg-transparent md:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('AboutSite') }}" class="@if(\Request::route()->getName() == 'AboutSite') 
                                    active
                                @endif menu-item uppercase block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-0 md:hover:text-secondary md:p-0">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('ServiceSite') }}" class="@if(\Request::route()->getName() == 'ServiceSite') 
                                    active
                                @endif menu-item uppercase block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-0 md:hover:text-secondary md:p-0">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('HomeSite') }}#contact" class="menu-item uppercase block py-2 pr-4 pl-3 text-primary-focus md:border-0 md:hover:text-secondary md:p-0">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
            }
        });
        window.onload = function () {
            scrollSpy('#main-menu', {
                sectionClass: '.scrollspy',
                menuActiveTarget: '.menu-item',
                offset: 100,
                scrollContainer: '.scroll-container',
                // smooth scroll
                smoothScroll: true,
                smoothScrollBehavior: function(element) {
                console.log('run "smoothScrollBehavior"...', element)
                element.scrollIntoView({ behavior: 'smooth' })
                }
            })
        }
        AOS.init({
            once:true
        });
    </script>

    @livewireScripts

</body>
</html>