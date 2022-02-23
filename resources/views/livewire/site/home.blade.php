<div>
    @include('sliders')
    <section id="about">
        <div class="w-full text-center p-10">
            <!-- <h1 class="mb-3 mt-1 md:mt-5 lato uppercase text-2xl">About Pure</h1> -->
            <p class="lato uppercase">PureStart is a local owner-operated commercial cleaning company that offers a range
                of cleaning services, performing with exceptional cleaning knowledge and high-quality
                products to guarantee customer satisfaction and exceed expectations. Serving the
                Denver metro area.</p>
            <p class="lato uppercase mb-3 mt-3">WE WILL MAKE SURE YOUR BUSINESS IS CLEAN, READY FOR YOU AND
                YOUR EMPLOYEES TO HAVE A GOOD, FRESH, PURE START.  <br />
                WE ARE RELIABLE, TRUSTWORTHY AND DETAIL ORIENTED.</p>
        </div>
        <div class="w-full bg-white p-7">
            <h1 class="text-center uppercase lato italic">BOOK NOW!! <br /> 20% Discount On Our First Visit</h1>
        </div>
    </section>
    <section id="contact">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="w-full py-10 px-5 bg-primary">
                <h1 class="text-center text-white text-xl mb-1 lato uppercase">
                    • HAVING A CLEAN SPACE IS SIMPLE •
                </h1>
                <!-- <h1 class="text-center text-white text-md lato uppercase">We will make sure your business is clean,
                    ready for you and your employees to
                    have a good-fresh, Pure-Start.</h1>  -->
                <div class="grid justify-items-center sm:hidden">
                    <div class="my-2">
                        <div class="w-10 h-10 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                            <img src="{{ asset('img/steps/IMG-3055-min.png') }}" alt="phone-icon"  />
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Contact us</div>
                    </div>
                    <div class="w-2 rounded bg-gray-200 h-10"></div>
                    <div class="my-2">
                        <div class="w-10 h-10 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                            <span class="text-center text-secondary-focus w-full">
                                <img src="{{ asset('img/steps/IMG-3056-min.png') }}" alt="calendar-icon" class="w-full" />
                            </span>
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">
                            SET UP AN APPOINTMENT <br /> <span class="text-xs">(Free estimate)</span>
                        </div>
                    </div>
                    <div class="w-2 rounded bg-gray-200 h-10"></div>
                    <div class="my-2">
                        <div class="w-10 h-10 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                            <img src="{{ asset('img/steps/IMG-3057-min.png') }}" alt="mail-icon" class="w-full" />
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Book</div>
                    </div>
                    <div class="w-2 rounded bg-gray-200 h-10"></div>
                    <div class="my-2">
                        <div class="w-10 h-10 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                            <img src="{{ asset('img/steps/IMG-3058-min.png') }}" alt="enjoy-icon" class="w-full" />
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Enjoy your clean space</div>
                    </div>
                </div>


                <div class="hidden sm:flex sm:mt-10">
                    <div class="w-1/4">
                        <div class="relative mb-2">
                            <div class="w-12 h-12 -mt-1 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                                <img src="{{ asset('img/steps/IMG-3055-min.png') }}" alt="phone-icon"  />
                            </div>
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Contact us</div>
                    </div>
                    <div class="w-1/4">
                        <div class="relative mb-2">
                            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                <div class="w-0 py-1 rounded" style="width: 33%;"></div>
                            </div>
                            </div>
                            <div class="w-12 h-12 -mt-1 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                                <img src="{{ asset('img/steps/IMG-3056-min.png') }}" alt="calendar-icon" class="w-full" />
                            </div>
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">
                            SET UP AN APPOINTMENT <br /> <span class="text-xs">(Free estimate)</span>
                        </div>
                    </div>
                    <div class="w-1/4">
                        <div class="relative mb-2">
                            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                <div class="w-0 py-1 rounded" style="width: 33%;"></div>
                            </div>
                            </div>
                            <div class="w-12 h-12 -mt-1 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                                <img src="{{ asset('img/steps/IMG-3057-min.png') }}" alt="mail-icon" class="w-full" />
                            </div>
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Book</div>
                    </div>
                    <div class="w-1/4">
                        <div class="relative mb-2">
                            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
                            </div>
                            </div>
                            <div class="w-12 h-12 -mt-1 mx-auto bg-primary-focus rounded-full text-lg text-white flex items-center">
                                <img src="{{ asset('img/steps/IMG-3058-min.png') }}" alt="enjoy-icon" class="w-full" />
                            </div>
                        </div>
                        <div class="lato uppercase text-white text-sm text-center">Enjoy your clean space</div>
                    </div>
                </div>
            </div>
            <form wire:submit.prevent="submit">
                <div class="p-10 bg-secondary-focus">
                    <p class="text-md text-center lato uppercase mb-2">Drop us a line and we’ll get back with you soon.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text lato uppercase">Full name</span>
                            </label> 
                            <input type="text" wire:model="name" class="rounded-sm text-xs p-2">
                        </div> 
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text lato uppercase">Email address</span>
                            </label> 
                            <input type="text" wire:model="email" class="rounded-sm text-xs p-2">
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text lato uppercase">Phone number</span>
                            </label> 
                            <input type="text" wire:model="phone" class="rounded-sm text-xs p-2">
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text lato uppercase">Business name</span>
                            </label> 
                            <input type="text" wire:model="business" class="rounded-sm text-xs p-2">
                        </div>
                    </div>
                    <div>
                        <center>
                            @if (session()->has('success'))
                                <div class="alert shadow-lg alert-success alert-xs mt-8">
                                    <div>
                                        <span class="text-md lato">{{ session('success') }}</span>
                                    </div>
                                </div>
                            @else
                                <button class="btn btn-success btn-sm w-56 md:w-60 lato border-0 rounded-sm mt-8">Submit</button>
                            @endif
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
