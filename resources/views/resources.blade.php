<x-app-layout>
    @section('meta')
        <title>Resources</title>
        <meta name="description" content="Resources page of the website.">
        @endsection
        @section('content')
        <main class="site-main">
            <section class="section sectino--news pt-0 section--border pb-150 ">
                <div class="wrap">
                    <div class="page__title">
                        <span class="font-orange">
                            <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--icon"> OUR BLOGS
                        </span>
                        <h1>News & Articles</h1>
                    </div>
                    <div class="news__border">
                        <a href="{{ route('blog-detail') }}">
                            <div class="row no-guttor ">
                                <div class="col-6 ">
                                    <div class="news__img">
                                        <img src="{{asset('assets/images/blog-img-1-2.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="news__content ">
                                        <div class="news__head">
                                            <h3>Tricks for packing light and maximizing space in your luggage</h3>
                                            <span class="blog__span ">Travel Tips</span>
                                            <span>Jun 3, 2024</span>
                                        </div>
                                        <div class="news__btn">
                                            <span>  Read Articles </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row mt-64">
                        <div class="col-4">
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
                        <div class="col-4">
                            <div class="blog__card ">
                                <a href="{{ route('blog-detail') }}">
                                    <div class="blog__img ">
                                        <img src="{{asset('assets/images/blog-img-4.jpg')}}" alt="blog-img ">
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
                            <div class="blog__card ">
                                <a href="{{ route('blog-detail') }}">
                                    <div class="blog__img ">
                                        <img src="{{asset('assets/images/blog-img-5.jpg')}}" alt="blog-img ">
                                    </div>
                                    <div class="blog__info ">
                                        <h4>Cultural immersion connecting with locals and embracing tradition</h4>
                                        <span class="blog__span ">Cultural Travel</span>
                                        <span>Jun 3, 2024</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blog__card mt-48">
                                <a href="{{ route('blog-detail') }}">
                                    <div class="blog__img ">
                                        <img src="{{asset('assets/images/blog-img-6.jpg')}}" alt="blog-img ">
                                    </div>
                                    <div class="blog__info ">
                                        <h4>Adventure on the high seas planning your dream cruise vacation</h4>
                                        <span class="blog__span ">Cruise Travel</span>
                                        <span>Jun 3, 2024</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blog__card mt-48">
                                <a href="{{ route('blog-detail') }}">
                                    <div class="blog__img ">
                                        <img src="{{asset('assets/images/blog-img-7.jpg')}}" alt="blog-img ">
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
                            <div class="blog__card mt-48">
                                <a href="{{ route('blog-detail') }}">
                                    <div class="blog__img  ">
                                        <img src="{{asset('assets/images/blog-img-8.jpg')}}" alt="blog-img ">
                                    </div>
                                    <div class="blog__info ">
                                        <h4>Unforgettable experiences that belong on every traveler's wishlist.</h4>
                                        <span class="blog__span ">Adventure Travel</span>
                                        <span>Jun 3, 2024</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="btn__right mt-30">
                        <div class="btn__all room--btn mt-10">
                            <a class="btn bg--orange" href="#">Next</a>
                            <div class="btn__icon--black"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @endsection
</x-app-layout>