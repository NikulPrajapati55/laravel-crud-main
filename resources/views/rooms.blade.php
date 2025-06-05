<x-app-layout>
    @section('meta')
    <meta name="name" content="website boilerplate">
        <title>Rooms</title>
    @endsection
    @section('content')
    <main class="site-main">
        <section class="section section--room pt-0 pb-150 section--border">
            <div class="wrap ">
                <div class="page__title">
                    <span class="font-orange ">
                        <img src="{{asset('assets/images/logo--room.svg')}}" alt="logo--room "> LUXURY COMFORT</span>
                    <h1>Explore Rooms </h1>
                </div>
                <div class="row mt-10 ">
                    <div class="col-6 ">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-3.jpg')}} " alt="room-img-3 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}} " alt="size-icon ">
                                            <span class="room__text "> 400 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}} " alt="bed-icon ">
                                            <span class="room__text ">Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}} " alt="men-icon ">
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
                                    <img src="{{asset('assets/images/room-img-4.jpg')}}" alt="room-img-3 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}} " alt="size-icon ">
                                            <span class="room__text "> 600 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text ">2 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}} " alt="men-icon ">
                                            <span class="room__text "> 4 pepole</span>
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
                                    <img src="{{asset('assets/images/rooms--img-4.jpg')}} " alt="room-img-3 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}} " alt="size-icon ">
                                            <span class="room__text "> 650 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}} " alt="bed-icon ">
                                            <span class="room__text ">1 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 2 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4>Tranquil Oasis Retreat</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="room__block ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/room-img-6.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" lang="size-icon ">
                                            <span class="room__text " href="# "> 780 sq ft</span>
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
                    <div class="col-6 ">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/rooms--img-1.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" alt="size-icon ">
                                            <span class="room__text "> 550 sq ft</span>
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
                                <h4> Lakeside Serenity Room</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/rooms--img-2.jpg')}}" alt="room-img-4 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" lang="size-icon ">
                                            <span class="room__text "> 300 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
                                            <span class="room__text ">1 Bed</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon ">
                                            <span class="room__text "> 1 pepole</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4>Countryside Manor Room</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn__right">
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
