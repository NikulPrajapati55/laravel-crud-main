<x-app-layout>
    @section('meta')
        <meta name="name" content="website boilerplate">
        <title>HOME</title>
    @endsection
    @section('content')
    <main class="site-main ">
        <section class="section section--hero ">
            <div class=" wrap ">
                <div class="hero__social ">
                    <div class="hero__social-icon ">
                        <p class="font-14 ">Join our community </p>
                        <div class="app__icon ">
                            <a href="# ">
                                <img src="{{asset('assets/images/x-icon.svg')}} " alt="x-icon ">
                            </a>
                            <a href="# ">
                                <img src="{{asset('assets/images/face-icon.svg')}}" alt="face-icon ">
                            </a>
                            <a href="# ">
                                <img src="{{asset('assets/images/you tube-icon.svg')}}" alt="you tube-icon ">
                            </a>
                            <a href="# ">
                                <img src="{{asset('assets/images/insta.svg')}}" alt="insta ">
                            </a>
                        </div>
                    </div>
                    <div class="hero__card ">
                        <h6>Beautiful Destinations</h6>
                        <div class="row mt-30 ">
                            <div class="col-5 p-0 ">
                                <div class="hero__card-img ">
                                    <img src="{{asset('assets/images/hero--card-img-3.jpg')}}" alt="images ">
                                </div>
                            </div>
                            <div class="col-7 p-0 ">
                                <div class="hero__text ">
                                    100k+ users have visited our platform
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__content ">
                    <p>Enjoy your vacation & experience the ultimate in luxury & comfort as you relax & unwind.</p>
                    <h1 class="linear-wipe ">Discover the perfect blend of luxury & comfort at Hotel Cruise</h1>
                    <div class="hero__btn ">
                        <a href="{{route('rooms') }}" class="btn bg--orange ">Explor Room <span></span></a>
                        <div class="btn__icon ">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--about ">
            <div class="wrap ">
                <div class="row ">
                    <div class="col-8 ">
                        <div class="row ">
                            <div class="col-6 ">
                                <div class="about__img pr-20 ">
                                    <img src="{{asset('assets/images/room-img-1.jpg')}}" alt="room-img-1 ">
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="about__content ">
                                    <h2 class="h3 ">We're dedicated to create moments of <span class="font__w-450 ">joy & delight</span> for every guest</h2>
                                    <p>Venenatis sed habitant tempus malesuada condimentum suspendisse nec auctor egestas quis augue non ultricies elit odio diam faucibus convallis.</p>
                                </div>
                                <div class="btn__all mt-48 ">
                                    <a href="{{ route('about') }}" class="btn btn--border ">More About us <span></span></a>
                                    <div class="btn__icon--black ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="about__fact ">
                                    <div class="about__text ">
                                        <span>70%</span>
                                        <p>Our guests are repeat visitors</p>
                                    </div>
                                    <div class="about__icon ">
                                        <img src="{{asset('assets/images/replace-icon.svg')}}" alt="replace-icon ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="about__fact ">
                                    <div class="about__text ">
                                        <span>30%</span>
                                        <p>Awards and recognitions</p>
                                    </div>
                                    <div class="about__icon ">
                                        <img src="{{asset('assets/images/awards.svg')}}" alt="awards ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="about__img pl-20 ">
                            <img src="{{asset('assets/images/room-img-2.jpg')}}" alt="room-img-2 ">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--room ">
            <div class="wrap ">
                <div class="room__head ">
                    <div class="room__content ">
                        <span class="font-orange ">
                        <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room "> LUXURY COMFORT</span>
                        <h2>EXPLORE ROOM </h2>
                    </div>
                    <div class="room__btn ">
                        <div class="btn__all ">
                            <a class="btn btn--border " href="{{ route('rooms') }}">Veiw All Room <span></span></a>
                            <div class="btn__icon--black ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-10 ">
                    <div class="col-6 ">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-3.jpg')}}" alt="room-img-3 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" alt="size-icon ">
                                            <span class="room__text "> 400 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text ">Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 1-3 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4>Tranquil Oasis Retreat</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-4.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" lang="size-icon ">
                                            <span class="room__text "> 600 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text ">2 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 4 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4> Serenity Family Suite</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="room__block ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-5.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" lang="size-icon ">
                                            <span class="room__text "> 650 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text "> 1 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 2 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4> Penthouse Luxury Suite</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="room__block ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-6.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" lang="size-icon ">
                                            <span class="room__text "> 780 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text "> 3 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 6 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4> OMountain Escape Lodge</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--services ">
            <div class="wrap ">
                <div class="services__border ">
                    <div class="row no-guttor ">
                        <div class="col-6 ">
                            <div class="services__img ">
                                <img src="{{asset('assets/images/service-p.jpg')}}" alt="service-p ">
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="services__content mt-48 ">
                                <div class="section__headding">
                                    <h2>OUR SERVICES</h2>
                                </div>
                                <div class="services__card mt-64 ">
                                    <div class="services__number ">01</div>
                                    <div class="services__block ">
                                        <div class="services__info ">
                                            <div class="services__head ">
                                                <h4>Daily Housekeeping</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange ">
                                            </div>
                                        </div>
                                        <div class="services__text ">
                                            <p>Semper vulputate commodo urna id. Est feugiat aliquam bibendum nulla mauris elit. Eu maecenas neque nibh purus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services__card ">
                                    <div class="services__number "> 02</div>
                                    <div class="services__block ">
                                        <div class="services__info ">
                                            <div class="services__head ">
                                                <h4>24-Hour Room Service</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange ">
                                            </div>
                                        </div>
                                        <div class="services__text ">
                                            <p>Turpis egestas ullamcorper et tempor. Neque tellus vel purus pellentesque adipiscing. Amet blandit quam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services__card ">
                                    <div class="services__number ">03</div>
                                    <div class="services__block ">
                                        <div class="services__info ">
                                            <div class="services__head ">
                                                <h4>Complimentary Wi-Fi</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange ">
                                            </div>
                                        </div>
                                        <div class="services__text ">
                                            <p>Interdum hendrerit ante risus ut aliquet id orci risus. Turpis est blandit donec elit. Scelerisque massa ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section section--facts ">
            <div class="wrap ">
                <div class="facts__head ">
                    <div class="facts__content ">
                        <span class="font-orange ">
                <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room "> CRUISE STATS
                  </span>
                        <h2>FACTS & FIGURES</h2>
                    </div>
                    <div class="facts__btn ">
                        <div class="btn__all ">
                            <a class="btn text-white bg--orange " href="{{ route('contact') }}">contact us <span></span></a>
                            <div class="btn__icon border--white "></div>
                        </div>
                    </div>
                </div>
                <div class="facts__info ">
                    <div class="facts__text ">
                        <p>Display a high customer satisfaction rate or positive reviews</p>
                    </div>
                    <div class="facts__img ">
                        <img src="{{asset('assets/images/facts--img-1.jpg')}}" alt="facts--img-1 ">
                    </div>
                    <div class="facts__number ">
                        <span class="facts__span-number ">41k</span>
                        <span class="facts__span-text ">SATISFACTION</span>
                    </div>
                </div>
                <div class="facts__info ">
                    <div class="facts__number ">
                        <span class="facts__span-number ">15+</span>
                        <span class="facts__span-text ">EXPERIENCE</sup>
                </div>
                <div class="facts__text ">
                    <p>Experience to deliver exceptional service and unforgettable moments</p>
                </div>
                <div class="facts__img ">
                    <img src="{{asset('assets/images/facts--img-2.jpg')}}" alt="facts--img-1 ">
                </div>
            </div>
            <div class="facts__info ">
                <div class="facts__img ">
                    <img src="{{asset('assets/images/facts--img-3.jpg')}}" alt="facts--img-1 ">
                </div>
                <div class="facts__number ">
                    <span class="facts__span-number ">1.1k</span>
                        <span class="facts__span-text ">ROOMS LISTED</span>
                    </div>
                    <div class="facts__text ">
                        <p>Explore our curated selection of villas and rooms for your perfect getaway.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--reviews ">
            <div class="wrap ">
                <div class="reviews__head ">
                    <div class="reviews__content ">
                        <span class="font-orange ">
                  <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room ">  TESTIMONIALS
                     </span>
                        <h2>CUSTOMERS REVIEWS</h2>
                    </div>
                    <div class="reviews__btn ">
                        <div class="btn__all ">
                            <a href="{{ route('review') }}" class="btn btn--border "> <span></span>View All Reviews</a>
                            <div class="btn__icon--black "></div>
                        </div>
                    </div>
                </div>
                <div class="reviews__block ">
                    <div class="reviews__img ">
                        <img src="{{asset('assets/images/reviews--img.jpg')}}" alt="reviews--img ">
                    </div>
                    <div class="reviews__info  reviews--card">
                        <p>Ac porttitor gravida non commodo etiam ornare. Eget feugiat sed ullamcorper vestibulum non pellentesque nisl mattis. Odio turpis donec praesent tellus amet viverra nec mattis amet. Urna ut sit sed molestie enim. Facilisis luctus
                            pulvinar ut fermentum neque consequat. Molestie porttitor.</p>
                        <div class="reviews__customers ">
                            <div class="reviews__img-2 ">
                                <img src="{{asset('assets/images/customers-img.jpg')}}" alt="customer ">
                            </div>
                            <div class="customers__about ">
                                <span>Courtney Henry</span>
                                <span class="font-14 ">Florida, US</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--blogs ">
            <div class="wrap ">
                <div class="reviews__head ">
                    <div class="reviews__content ">
                        <span class="font-orange ">
                  <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room "> OUR BLOGS</span>
                        <h2>NEWS & ARTICLES</h2>
                    </div>
                    <div class="reviews__btn ">
                        <div class="btn__all ">
                            <a href="{{ route('resources') }}" class="btn btn--border ">View All Blogs <span></span></a>
                            <div class="btn__icon--black "></div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-4 ">
                        <div class="blog__card ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="{{asset('assets/images/blog-img-1.jpg')}}" alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Tricks for packing light and maximizing space in your luggage</h4>
                                    <span class="blog__span ">Travel Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="blog__card ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="{{asset('assets/images/blog-img-2.jpg')}}" alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Family-friendly destinations planning the perfect vacation for all ages</h4>
                                    <span class="blog__span ">Family Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="blog__card ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="{{asset('assets/images/blog-img-3.jpg')}}" alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Where every detail is tailored to exceed your expectations.</h4>
                                    <span class="blog__span "> Luxury Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--gift ">
            <div class="wrap ">
                <div class="gift__content text-center ">
                    <img src="{{asset('assets/images/gift--.svg')}}" alt="gift-svg ">
                    <h2>SURPRISE YOUR LOVED ONES WITH HOTEL CRUISE GIFT CARDS.</h2>
                    <p>Sed gravida fringilla malesuada vel eleifend enim urna maecenas id. Neque turpis volutpat mollis donec odio velit faucibus. Non nibh dapibus faucibus diam fringilla volutpat sollicitudin.</p>
                    <div class="gift__btn ">
                        <a href="#" class="btn bg--orange btn--big ">Join your Tearm</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section--slider">
            <div class="wrap">
                <div class="swiper-container swiper--marquee swiper--top mt-74">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-1.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-2.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-3.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-4.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-5.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-6.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-7.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-8.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-9.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                        <div class="swiper-slide img">
                            <a href="# " class="hotel__hover">
                                <img src="{{asset('assets/images/hotel-10.jpg')}}" alt="hotel-img ">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>
