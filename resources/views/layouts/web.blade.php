<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="purestartllc" class="bg-secondary-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PureStartLLC</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/purestartllc.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/purestartllc.js') }}"></script>
    <script src="{{ asset('js/simple-scrollspy.min.js') }}"></script>
</head>
<body>
    <header class="sticky top-0 z-50" >
        <nav class="bg-white border-b-2 border-primary px-2 sm:px-4 py-2.5">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex">
                    <img src="{{ asset('img/logo2.png') }}" class="w-72 md:w-72">
                </a>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium" id="main-menu">
                        <li>
                            <a href="javscript:void(0)" class="active menu-item block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-none md:bg-transparent md:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="javscript:void(0)" class="menu-item block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-0 md:hover:text-secondary md:p-0">
                                Our services
                            </a>
                        </li>
                        <li>
                            <a href="javscript:void(0)" class="menu-item block py-2 pr-4 pl-3 text-primary-focus border-b border-gray-100 md:border-0 md:hover:text-secondary md:p-0">
                                Option
                            </a>
                        </li>
                        <li>
                            <a href="javscript:void(0)" class="menu-item block py-2 pr-4 pl-3 text-primary-focus md:border-0 md:hover:text-secondary md:p-0">
                                Option
                            </a>
                        </li>
                        <li>
                            <a href="javscript:void(0)" class="menu-item block py-2 pr-4 pl-3 text-primary-focus md:border-0 md:hover:text-secondary md:p-0">
                                Option
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
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
    </script>
    @livewireScripts
</body>
</html>