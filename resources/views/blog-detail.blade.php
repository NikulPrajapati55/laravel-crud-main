<x-app-layout>
    @section('meta')
        <title>Blog Detail</title>
        <meta name="description" content="Blog detail page of the website.">
    @endsection
    @section('content')
    <main id="main">
        <section class="section section--border pt-0">
            <div class="wrap">
                <div class="page__title tricks__packing">
                    <h1> Tricks for packing light and maximizing space in your luggage</h1>
                    <div class="tricks__span">
                        <span class="tricks__packing-span">Travel Tips</span>
                        <span> Jun 3, 2024</span>
                    </div>
                </div>
                <div class="tricks__img">
                    <img src="assets/images/tricks--img.jpg" alt="images">
                </div>
                <div class="tricks__content mt-64 ">
                    <p>Welcome to Hotel<a href="https://webflow.com/"> Cruise</a>, where luxury meets tranquility. Our resort offers a range of premium accommodations, from elegant suites to spacious rooms, each designed to provide a serene retreat. Experience
                        the perfect vacation with us and create memories you'll cherish forever. Let us help you create golden memories that last a lifetime</p>
                    <div class="mt-30 cruise__discover">
                        <h3 class="font-28 ">Discover the beauty in every detail with Cruise.</h3>
                        <ol>
                            <li>Nibh libero condimentum duis turpis pretium molestie netus turpis</li>
                            <li> Turpis lacus sed sagittis mollis sitquam ipsum</li>
                            <li> Feugiat maurisac ultricies cursus sollicitudin acmauris</li>
                            <li> Arcu rutrum luctus libero elementum quis libero enim utgravida quis</li>
                            <li> Molestie sem cursus pulvinar euismod pulvinar nisi at nisi consequat integer neque arcu.</li>
                            <li> Consequat vulputate pellentesque cursus venenatis egestas.</li>
                        </ol>
                    </div>
                    <div class="tricks__img-1 mt-30">
                        <img src="assets/images/tricks--img-1-1.jpeg" alt="img">
                    </div>
                    <blockquote>At Cruise, we believe in the power of elegance to elevate the travel experience. Our mission is to create moments of joy and delight for every guest, ensuring each stay is a unique and unforgettable journey. With Cruise, every booking
                        is a step towards an extraordinary adventure</blockquote>
                    <p>Odio augue morbi elementum lectus metus nec phasellus. Donec non auctor tellus nibh elementum nunc elementum. Aenean diam sed tincidunt urna. Vitae magna nam vitae mauris. Pellentesque lacus eget mattis gravida elementum nisi vestibulum.
                        Morbi lectus massa in cras cursus id scelerisque tincidunt.</p>
                    <div class="cruise__discover mt-30">
                        <h4>Our luxurious suites and rooms are designed to cater to your every need. </h4>
                        <p>Sollicitudin feugiat nisl, lorem interdum pellentesque. Massa, scelerisque in placerat rutrum hac scelerisque habitasse. Amet ultricies massa nec, ornare faucibus facilisi quisque leo iaculis. Velit consequat in aliquet ullamcorper
                            tristique pulvinar adipiscing sem. Imperdiet augue cras pretium at lectus congue leo feugiat. Eget sit nunc nullam fringilla ut sem eget quis.
                        </p>
                        <ul>
                            <li>Sit vulputate aliquam cras aliquam etnibh congue consequat pellentesque</li>
                            <li> Vestibulum massa aliquet odio mauris duis amet nsed dapibus porta est amet</li>
                            <li>Urna augue arcu duis eget proin sed morbi purus sit nunc sodales aliquam</li>
                            <li> Netus nunc risus interdum feugiat et nunc pellentesque mus.</li>
                            <li> Egestas vitae orci mauris a donec convallis volutpat ac.</li>
                        </ul>
                    </div>
                    <div class="tricks__img-1 mt-30">
                        <img src="assets/images/tricks--img-1.jpeg" alt="img">
                    </div>
                    <div class="mt-30">
                        <h5 class="font-18">Enjoy the unique blend of luxury, comfort, and exceptional service that only we can offer.</h5>
                        <p>Ac amet turpis ornare rhoncus. Sed sed ornare elit ut commodo feugiat commodo faucibus purus. Vitae sapien purus id eget neque nulla posuere pellentesque turpis. Aliquam hac amet rhoncus velit vel vitae. Sed lacinia neque amet
                            quis lectus. Pharetra ut volutpat mauris et turpis volutpat eu nisl. A lectus nisi posuere egestas maecenas nulla.</p>
                        <h6>We believe in the power of elegance to elevate the travel experience.</h6>
                        <p>Lobortis penatibus pharetra penatibus nunc morbi ut pulvinar odio nunc. Blandit non a nec leo quis posuere auctor. Amet nunc cras ut at. Gravida sit tempor dictumst odio eu nec blandit non.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--related">
            <div class="wrap">
                <div class="related__content">
                    <span class="font-orange">
                            <img src="assets/images/logo--room.svg" alt="title-logo"> RELATED
                     </span>
                    <h2>SIMILAR ARTICLES</h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="blog__card ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="assets/images/blog-img-4.jpg " alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Where every detail is tailored to exceed your expectations.</h4>
                                    <span class="blog__span ">Luxury Travel</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="blog__card">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="assets/images/blog-img-7.jpg " alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Solo travel empowering adventures for women wanderers</h4>
                                    <span class="blog__span ">Solo Travel</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="blog__card ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="blog__img ">
                                    <img src="assets/images/blog-img-2.jpg " alt="blog-img ">
                                </div>
                                <div class="blog__info ">
                                    <h4>Family-friendly destinations planning the perfect vacation for all ages</h4>
                                    <span class="blog__span ">Family Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>