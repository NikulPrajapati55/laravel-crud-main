<x-app-layout>
    @section('meta')
        <title>Blog Detail</title>
        <meta name="description" content="Blog detail page of the website.">
    @endsection 
    @section('content')
    <main class="site-main">
        <section class="section section--testimonials section--border pb-150 pt-0 ">
            <div class="wrap">
                <div class="page__title">
                    <span class="font-orange">
                        <img src="{{asset('assets/images/logo--room.svg')}}" alt="title-logo"> TESTIMONIALS
                    </span>
                    <h1>Customers Review </h1>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Ac porttitor gravida non commodo etiam ornare. Eget feugiat sed ullamcorper vestibulum non pellentesque nisl mattis. Odio turpis donec praesent tellus amet viverra nec mattis amet. Urna ut sit sed molestie enim. Facilisis
                                luctus pulvinar ut fermentum neque consequat. Molestie porttitor.</p>
                            <div class="reviews__customers  ">
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
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Sed hendrerit mauris rhoncus elementum dui quam id. Quis donec euismod sollicitudin libero. Et quis non elit at ligula purus cursus. Eget ipsum semper metus aliquam facilisis volutpat. Gravida quisque nullam in nibh. Nunc
                                ac integer nibh nunc mattis facilisis at. Egestas in amet tincidunt ornare elit.</p>
                            <div class="reviews__customers  ">
                                <div class="reviews__img-2 ">
                                    <img src="{{asset('assets/images/customers-img-1.jpg')}}" alt="customer ">
                                </div>
                                <div class="customers__about ">
                                    <span>Wade Warren</span>
                                    <span class="font-14 ">Texas, US</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Adipiscing maecenas risus aenean tristique eu libero lorem. Purus elementum pharetra cursus risus magna id. Ornare lacus turpis ultrices donec scelerisque. Etiam consectetur adipiscing molestie massa eget varius egestas
                                vulputate sagittis tortor id viverra pharetra nec.
                            </p>
                            <div class="reviews__customers  ">
                                <div class="reviews__img-2 ">
                                    <img src="{{asset('assets/images/customers-img-2.jpg')}}" alt="customer ">
                                </div>
                                <div class="customers__about ">
                                    <span>Kristin Watson</span>
                                    <span class="font-14 ">California, USA </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Porttitor nec ante rhoncus sed sed pharetra. Tellus natoque ac eget pretium. Accumsan in orci ultricies amet duis vel. Diam ac amet cursus proin id pellentesque enim pellentesque. Ac eleifend orci quisque donec suspendisse
                                adipiscing sed consequat. Arcu lectus viverra varius.</p>
                            <div class="reviews__customers  ">
                                <div class="reviews__img-2 ">
                                    <img src="{{asset('assets/images/customers-img-3.jpg')}}" alt="customer ">
                                </div>
                                <div class="customers__about ">
                                    <span>Devon Lane</span>
                                    <span class="font-14 ">Grorgia, US</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Habitasse enim iaculis massa mattis egestas id odio velit nsectetur. Pharetra mauris platea viverra blandit integer lacinia. Lorem dolor in diam nibh. Massa etiam ut vel imperdiet nibh. Arcu in in praesent feugiat morbi
                                pellentesque. Leo nulla tincidunt sit habitant neque eros.</p>
                            <div class="reviews__customers  ">
                                <div class="reviews__img-2 ">
                                    <img src="{{asset('assets/images/customers-img-4.jpg')}}" alt="customer ">
                                </div>
                                <div class="customers__about ">
                                    <span>Albert Flores </span>
                                    <span class="font-14 ">Toronto, US</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" reviews__box ">
                            <p>Netus quis odio vel consequat. Leo aliquam ac molestie venenatis. Habitant amet neque facilisis aliquet viverra. Pharetra et at citudin praesent et molestie etiam purus risus. Quis sollicitudin vivamus nullam eget condimentum
                                fermentum id at urna lor cursus eget laoreet.</p>
                            <div class="reviews__customers  ">
                                <div class="reviews__img-2 ">
                                    <img src="{{asset('assets/images/customers-img-5.jpg')}}" alt="customer ">
                                </div>
                                <div class="customers__about ">
                                    <span>Jacob Jones</span>
                                    <span class="font-14 ">New York,US</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn__right">
                    <div class="btn__all room--btn ">
                        <a class="btn bg--orange" href="#">Next</a>
                        <div class="btn__icon--black"></div>
                    </div>
                </div>
        </section>
    </main>
    @endsection
</x-app-layout>