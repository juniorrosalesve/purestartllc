<div>
    <!-- SliderShow -->
    <section id="home" class="scrollspy">
        <div class="swiper mySwiper md:max-h-96 shadow-lg">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://via.placeholder.com/1600x650">
                </div>
                <div class="swiper-slide">
                    <img src="https://via.placeholder.com/1600x650">
                </div>
                <div class="swiper-slide">
                    <img src="https://via.placeholder.com/1600x650">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <section id="services">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="basis-2/4 p-10 bg-secondary-focus">
                <h1 class="mb-3 mt-1 md:mt-5 lato uppercase text-2xl">Our services</h1>
                <p class="lato">Vacant Units
                    Before & After Party
                    Events Cleaning
                    Corporate Offices
                    Restaurants
                    Showrooms
                    Move In/Out Cleaning
                    Vacation Rentals
                    Leasing Offices
                    Medical Offices
                    Classrooms/ Schools
                    Real State Listings
                    New Construction Units
                    Retail Stores
                    Storage Units
                    Club Houses</p>
            </div>
            <div class="basis-2/4 p-10 bg-primary">
                <h1 class="text-center text-white text-lg mb-5 lato">We will make sure your business is clean,
                    ready for you and your employees to
                    have a good-fresh, Pure-Start.</h1>
                <ul class="steps steps-vertical md:steps-horizontal">
                    <li class="step lato uppercase text-white text-sm step-primary-focus">Contact us</li> 
                    <li class="step lato uppercase text-white text-sm step-primary-focus">SET UP AN APPOINTMENT</li> 
                    <li class="step lato uppercase text-white text-sm step-primary-focus">WALK-THROUGH & FREE ESTIMATE</li> 
                </ul>
                <p class="text-white mt-10 text-center text-sm lato">PureStart is an owner-operated commercial cleaning company that
                    offers a range of cleaning services, performing with exceptional
                    cleaning knowledge and high quality products to guarantee customer
                    
                    satisfaction and exceed your expectations.</p>
            </div>
        </div>
        <div class="w-full bg-white p-7">
            <h1 class="text-center uppercase lato">BOOK NOW!! 20% Discount On Our First Visit</h1>
        </div>
    </section>
    <section>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div id="map" class="w-full h-52 md:h-full"></div>
            <div class="p-10 bg-white md:bg-secondary-focus">
                <h1 class="text-2xl text-center lato uppercase">Contact</h1>
                <p class="text-sm text-center lato">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quod dicta nostrum est culpa aut esse sunt!</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text lato">Full name</span>
                        </label> 
                        <input type="text" class="input input-bordered input-sm">
                    </div> 
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text lato">E-mail</span>
                        </label> 
                        <input type="text" class="input input-bordered input-sm">
                    </div> 
                </div>
                <div class="grid grid-cols-1 gap-3">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text lato">Message</span>
                        </label> 
                        <textarea class="textarea h-10 textarea-bordered"></textarea>
                    </div>
                    <div>
                        <center>
                            <button type="button" class="btn btn-success btn-sm lato">Submit</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="md:flex md:flex-row bg-white">
            <div class="md:basis-2/6 p-10 bg-primary text-white">
                <h1>LICENSED & INSURED</h1>
                <p>Reliable, Trustworthy & Detail Oriented</p>
                <div class="grid grid-cols-3 mt-2">
                    <span class="mdi mdi-instagram text-secondary-focus cursor-pointer" style="font-size: 40px;"></span>
                    <span class="mdi mdi-facebook text-blue-300 cursor-pointer" style="font-size: 40px;"></span>
                    <span class="mdi mdi-twitter text-blue-200 cursor-pointer" style="font-size: 40px;"></span>
                </div>
            </div>
            <div class="md:basis-8/12 p-10">
                <div class="md:flex md:justify-center md:gap-5">
                    <div>
                        <p class="text-center lato font-semibold">813.607.0944</p>
                    </div>
                    <div class="md:-mt-5">
                        <center>
                            <img src="{{ asset('img/icono.png') }}" alt="icono-purestartllc" class="w-10">
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
                    <p class="uppercase font-semibold lato">&copy; PURESTARTLLC.COM</p>
                    <p class="lato italic">“Nice and Neat, Fresh and Clean”</p>   
                </div>
            </div>
          </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS') }}&callback=initMap&v=weekly" async></script>
    <script>
        function initMap() {
            const myLatlng = { lat: 8.614913, lng: -70.256498 };

            let map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatlng,
                zoomControl:false,
                streetViewControl:false,
                mapTypeControl:false
            });
            marker = new google.maps.Marker({
                position:myLatlng,
                map: map,
            });
            const infoBody      =  '<h2 class="text-md uppercase">purestart, llc</h2><hr />'+
                '<p class="mt-1"><b>Address:</b> </p>'+
                '<p><b>Phone:</b></p>'
            
            ; 
            const infowindow    =   new google.maps.InfoWindow({
                content: infoBody,
                maxWidth:500
            });
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false
            });
        }
    </script>
</div>
