<x-app-layout>
    @section('meta')
        <meta name="description" content="Blog Detail">
        <meta name="keywords" content="Blog Detail">
        <title>Blog Detail</title>
    @endsection
    @section('content')
    <main class="site-main">
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
                            <img src="/{{asset('assets/images/about--img-4.jpg')}}" alt="about--img">
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
                            <a href="{{ route('resources') }}" class="btn btn--border ">View All Blogs</a>
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
                        <a href="{{ route('contact') }}" class="btn bg--orange btn--big ">Join your Tearm</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>