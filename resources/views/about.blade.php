<x-app-layout>
    @section('meta')
    <meta name="name" content="website boilerplate">
        <title>Rooms</title>
    @endsection
    @section('content')
    <main class="site-main">
        <section class="section section--luxuriou pt-0 section--border">
            <div class="wrap">
                <div class="page__title">
                    <span class="font-orange">
                    <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo"> ABOUT US</span>
                    <h1>Who We Are</h1>
                </div>
                <div class="luxuriou__block">
                    <div class="luxuriou__card">
                        <div class="luxuriou__img">
                            <img src="{{asset('assets/images/about--img-1.jpg')}}" alt="about__img">
                        </div>
                        <div class="luxuriou__info">
                            <p>Diam nec placerat faucibus purus. Sit amet diam malesuada cursus faucibus elementum laoreet porttitor enim. Egestas quis consequat fermentum lacus enim consequat tellus quisque morbi.</p>

                            <div class="luxuriou__span mt-64">
                                <span>85% Luxury Beds
                                <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon">
                            </span>
                                <span>30+ Awards & recognitions
                                <img src="{{asset('assets/images/about--icon-1.svg')}}" alt="about__icon">
                            </span>
                                <span>10k+ Satisfaction
                                <img src="{{asset('assets/images/about--icon-2.svg')}}" alt="about__icon"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="luxuriou__card">
                        <div>
                            <h3>Hotel Cruise is your gateway to a peaceful and luxurious vacation.</h3>
                            <p>Tellus faucibus proin consectetur eget posuere quis ut eu. Vel risus massa eu ultrices risus volutpat scelerisque facilisis id. Interdum tellus in congue nunc quisque arcu volutpat vel. Id scelerisque quam vestibulum nunc
                                ornare.
                            </p>
                        </div>
                        <div class="luxuriou__img">
                            <img src="{{asset('assets/images/about--img-2.jpg')}}" alt="about__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--services pb--80">
            <div class="wrap">
                <div class="services__border">
                    <div class="row no-guttor">
                        <div class="col-6 ">
                            <div class="services__img">
                                <img src="{{asset('assets/images/service-p.jpg')}}" alt="service-p">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="services__content mt-48">
                                <div class="section__headding">
                                    <h2>OUR SERVICES</h2>
                                </div>
                                <div class="services__card mt-64">
                                    <div class="services__number">01</div>
                                    <div class="services__block">
                                        <div class="services__info">
                                            <div class="services__head">
                                                <h4>Daily Housekeeping</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange ">
                                            </div>
                                        </div>
                                        <div class="services__text">
                                            <p>Semper vulputate commodo urna id. Est feugiat aliquam bibendum nulla mauris elit. Eu maecenas neque nibh purus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services__card ">
                                    <div class="services__number"> 02</div>
                                    <div class="services__block">
                                        <div class="services__info">
                                            <div class="services__head">
                                                <h4>24-Hour Room Service</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange">
                                            </div>
                                        </div>
                                        <div class="services__text">
                                            <p>Turpis egestas ullamcorper et tempor. Neque tellus vel purus pellentesque adipiscing. Amet blandit quam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services__card ">
                                    <div class="services__number">03</div>
                                    <div class="services__block">
                                        <div class="services__info">
                                            <div class="services__head">
                                                <h4>Complimentary Wi-Fi</h4>
                                            </div>
                                            <div class="btn__icon--orange btn--hover-orange">
                                            </div>
                                        </div>
                                        <div class="services__text">
                                            <p>Interdum hendrerit ante risus ut aliquet id orci risus. Turpis est blandit donec elit. Scelerisque massa ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section section--cruise">
            <div class="wrap">
                <div class="cruise__content">
                    <span class="font-orange">
                    <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room"> OUR IMPACT
                </span>
                    <h2>WHY CHOOSE CRUISE</h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="cruise__card">
                            <div class="cruise__icon">
                                <img src="{{asset('assets/images/about--icon-3.svg')}}">
                            </div>
                            <div class="cruise__info">
                                <h4>Memorable Experiences</h4>
                                <p>Enim a diam id id. Arcu nec urna accumsan sit pellentesque. Suscipit sit sed mauris cras in Consequat eget varius massa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cruise__img">
                            <img src="{{asset('assets/images/about--img-5.jpg')}}" alt="about__img">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cruise__card">
                            <div class="cruise__icon">
                                <img src="{{asset('assets/images/about--icon-4.svg')}}">
                            </div>
                            <div class="cruise__info">
                                <h4>Handpicked Properties</h4>
                                <p> Libero orci quam molestie risus in accumsan egestas dictum etiam. Egestas duis et mi in scelerisque Pellentesque.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-8">
                        <div class="cruise__img">
                            <img src="{{asset('assets/images/about--img-3.jpg')}}" alt="about--img">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cruise__card">
                            <div class="cruise__card-headding">
                                <h4>Be Part of Something Special</h4>
                            </div>
                            <div class="cruise__info">
                                <p> Rhoncus vitae molestie condimentum nibh nisl amet faucibus quam temp Sem eget volutpat id pellentesque.</p>
                                <div class="btn__all ">
                                    <a class="btn text-white bg--orange " href="{{ route('contact') }}">Collaborate Now</a>
                                    <div class="btn__icon--black"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section section--reviews pt--80">
            <div class="wrap">
                <div class="reviews__head">
                    <div class="reviews__content">
                        <span class="font-orange">
              <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room">  TESTIMONIALS
                 </span>
                        <h2>CUSTOMERS REVIEWS</h2>
                    </div>
                    <div class="reviews__btn">
                        <div class="btn__all">
                            <a href="{{ route('review') }}" class="btn btn--border">View All Reviews <span></span></a>
                            <div class="btn__icon--black"></div>
                        </div>
                    </div>
                </div>
                <div class="reviews__block">
                    <div class="reviews__img">
                        <img src="{{asset('assets/images/reviews--img.jpg')}}" alt="reviews--img">
                    </div>
                    <div class="reviews__info">
                        <p>Ac porttitor gravida non commodo etiam ornare. Eget feugiat sed ullamcorper vestibulum non pellentesque nisl mattis. Odio turpis donec praesent tellus amet viverra nec mattis amet. Urna ut sit sed molestie enim. Facilisis luctus
                            pulvinar ut fermentum neque consequat. Molestie porttitor.</p>
                        <div class="reviews__customers">
                            <div class="reviews__img-2">
                                <img src="{{asset('assets/images/customers-img.jpg')}}" alt="customer">
                            </div>
                            <div class="customers__about">
                                <span>Courtney Henry</span>
                                <span class="font-14">Florida, US</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--team">
            <div class="wrap">
                <div class="team__content">
                    <span>
                    <img src="{{asset('assets/images/logo--room.svg')}}" alt="title icon"> MEET OUR TEAM
                   </span>
                    <h2>TEAM MEMBERS</h2>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="team__card">
                            <img src="{{asset('assets/images/about--img-6.jpg')}}" alt="team member">
                            <span class="team__name">Esther Howards</span>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="team__card">
                            <img src="{{asset('assets/images/about--img-7.jpg')}}" alt="team member">
                            <span class="team__name">Brooklyn Simmons</span>
                            <span>Chief Innovation Officer</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="team__card">
                            <img src="{{asset('assets/images/about--img-8.jpg')}}" alt="team member">
                            <span class="team__name">Darlene Robertson</span>
                            <span>Management Director</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="team__card">
                            <img src="{{asset('assets/images/about--img-9.jpg')}}" alt="team member">
                            <span class="team__name">Ronald Richards</span>
                            <span>Financial Analyst</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--blogs">
            <div class="wrap">
                <div class="reviews__head">
                    <div class="reviews__content">
                        <span class="font-orange">
              <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room"> OUR BLOGS</span>
                        <h2>NEWS & ARTICLES</h2>
                    </div>
                    <div class="reviews__btn">
                        <div class="btn__all">
                            <a href="{{ route('resources') }}" class="btn btn--border">View All Blogs <span></span></a>
                            <div class="btn__icon--black"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('blog-detail') }}">
                            <div class="blog__card">
                                <div class="blog__img">
                                    <img src="{{asset('assets/images/blog-img-1.jpg')}}" alt="blog-img">
                                </div>
                                <div class="blog__info">
                                    <h4>Tricks for packing light and maximizing space in your luggage</h4>
                                    <span class="blog__span">Travel Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('blog-detail') }}">
                            <div class="blog__card">
                                <div class="blog__img">
                                    <img src="{{asset('assets/images/blog-img-2.jpg')}}" alt="blog-img">
                                </div>
                                <div class="blog__info">
                                    <h4>Family-friendly destinations planning the perfect vacation for all ages</h4>
                                    <span class="blog__span">Family Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('blog-detail') }}">
                            <div class="blog__card">
                                <div class="blog__img">
                                    <img src="{{asset('assets/images/blog-img-3.jpg')}}" alt="blog-img">
                                </div>
                                <div class="blog__info">
                                    <h4>Where every detail is tailored to exceed your expectations.</h4>
                                    <span class="blog__span"> Luxury Tips</span>
                                    <span>Jun 3, 2024</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--questions">
            <div class="wrap">
                <div class="questions__content">
                    <span class="font-orange">
                    <img src="{{asset('assets/images/logo--room.svg')}}" alt="title icon"> FAQ'S
                </span>
                    <h2>HAVE ANY QUESTIONS?</h2>
                </div>
                <div class="row align-center">
                    <div class="col-5 col-md-12">
                        <div class="questions__img">
                            <img src="{{asset('assets/images/about--img-4.jpg')}}" alt="about--img">
                        </div>
                    </div>
                    <div class="col-7 col-md-12">
                        <div class="questions__crad">
                            <div class="questions__ans">
                                <div class=" accordian__trigger ">
                                    <p>Can I use multiple payment methods for my reservation?</p>
                                </div>
                                <div class="accordian__content">
                                    <p>Cras iaculis ac amet neque sed consequat mauris. Diam arcu velit lacus venenatis mattis sit lacus. Feugiat velit facilisis ut eu id eu nibh tortor viverra volutpat iaculis ut venenatis sit.
                                    </p>
                                </div>
                            </div>
                            <div class="questions__ans">
                                <div class=" accordian__trigger">
                                    <p>How far in advance should I book my stay with Cruise?</p>
                                </div>
                                <div class="accordian__content">
                                    <P>Non placerat ut sed sociis eget pharetra vel sit faucibus ullamcorper neque vel rhoncus diam amet metus convallis ullamcorper sit proin mauris nam facilisis in.
                                    </P>
                                </div>
                            </div>
                            <div class="questions__ans">
                                <div class=" accordian__trigger">
                                    <p>What types of accommodations does Cruise offer?</p>
                                </div>
                                <div class="accordian__content">
                                    <p>Accumsan accumsan id ornare congue nec adipiscing amet. Rhoncus odio eget sed eu habitant justo consectetur ullamcorper tincidunt sapien facilisi orci libero.
                                    </p>
                                </div>
                            </div>
                            <div class="questions__ans">
                                <div class=" accordian__trigger">
                                    <p>Can I request specific amenities or room preferences?</p>
                                </div>
                                <div class="accordian__content">
                                    <p>Quis habitasse pellentesque sem feugiat scelerisque egestas tincidunt. Tellus nunc nisi velit in ullamcorper. Diam velit pharetra consectetur ut vel pharetra enim.
                                    </p>
                                </div>
                            </div>
                            <div class="questions__ans">
                                <div class=" accordian__trigger">
                                    <p>Are there any special offers or discounts available?</p>
                                </div>
                                <div class="accordian__content">
                                    <p>Nulla orci leo volutpat facilisis morbi. In enim vivamus enim dui hac scelerisque vestibulum Mattis sed suscipit nulla arcu wgestas at sed nunc pretium vitae viverra.
                                    </p>
                                </div>
                            </div>
                            <div class="questions__ans">
                                <div class="accordian__trigger">
                                    <p>Can I book multiple rooms or accommodations for a group?</p>
                                </div>
                                <div class="accordian__content">
                                    <p>Porta cras tellus id placerat amet. Neque nulla aliquam sollicitudin augue egestas habitasse eget eget vestibulum. Fermentum pretium nulla tortor duis egestas erat vitae faucibus nisl.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--gift">
            <div class="wrap">
                <div class="gift__content text-center">
                    <img src="{{asset('assets/images/gift--.svg')}}" alt="gift-svg">
                    <h2>SURPRISE YOUR LOVED ONES WITH HOTEL CRUISE GIFT CARDS.</h2>
                    <p>Sed gravida fringilla malesuada vel eleifend enim urna maecenas id. Neque turpis volutpat mollis donec odio velit faucibus. Non nibh dapibus faucibus diam fringilla volutpat sollicitudin.</p>
                    <div class="gift__btn">
                        <a href="#" class="btn bg--orange btn--big">Join your Tearm</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>
