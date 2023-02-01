<x-home.guest>
    <div class="home-content">
            <div class="home-category">
                <h4 class="home-category-title">Plats Sénégalais</h4>

                <div class="home-category-content">

                    {{-- <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>  --}}

                    {{-- <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div> --}}

                     {{-- <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div> --}}
 
                    @foreach ($assietes as $assiete)
                        <div class="card-category bg-blue">
                            <div class="img">
                                <img src="{{ url('/storage/uploads',$assiete->image ) }}" alt="">
                            </div>  
                            <div class="card-category-details">
                                                
                                <h5>{{ $assiete->name }}</h5>
                                <p>
                                    {{ $assiete->detail }}
                                </p>
                                <div class="details-action">
                                    <span>{{ $assiete->price }} fCFA</span>
                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="home-category bg-blue">
                <h4 class="home-category-title" style="color: white">Fast food</h4>
                <div class="home-category-content">
                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-category">
                <h4 class="home-category-title">Dessert</h4>
                <div class="home-category-content">
                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ asset('assets/image/burger.png') }}" alt="">
                        </div>

                        <div class="card-category-details">
                            <h5>Thiébou djeune</h5>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <div class="details-action">
                                <span>1500 fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-home.guest>