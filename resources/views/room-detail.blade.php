<x-app-layout>
    @section('meta')
        <meta name="description" content="Blog Detail">
        <meta name="keywords" content="Blog Detail">
        <title>Blog Detail</title>
    @endsection
    @section('content')
    <main class="site-main">
        <section class="section pt-0 section--rooms-details section--border">
            <div class="wrap">
                <div class="page__title">
                    <span class="font-orange">
                      <img src="{{asset('assets/images/logo--room.svg')}}" alt="title-logo"> EXPLORE ROOM
                    </span>
                    <h1>Tranquil Oasis Retreat</h1>
                </div>
                <div class="rooms__detail">
                    <div class="rooms__box">
                        <div class="room__detail-img">
                            <img class="detail__img" src="{{asset('assets/images/room-img-3.jpg')}}" alt="room-img-3">

                            <a href="#" class="btn more--img">   More Images</a>
                        </div>
                        <div class="room__detail-text mt-64">
                            <p>In morbi urna diam non. Nam egestas id odio arcu bibendum ipsum eleifend. Tellus posuere mattis gravida sed. Lacus neque morbi ornare faucibus quam tincidunt velit urna adipiscing. Commodo sit ut quis sed vitae. Mauris
                                tristique placerat pharetra imperdiet fringilla magna mollis tristique volutpat. In cras egestas sagittis amet eleifend nullam nisi tempor posuere. Nec pulvinar vitae fusce vulputate fusce metus senectus dui mi. Potenti
                                ut dolor amet blandit nulla.
                            </p>
                            <p>Diam faucibus nisi arcu non in. Dui diam ut risus justo semper. Adipiscing orci nec nunc faucibus lacus. Nec iaculis eu metus dapibus. Risus consequat purus cursus quis sem. Commodo justo vulputate ipsum pretium metus dolor
                                pellentesque. In orci velit odio sed massa est et etiam.
                            </p>
                        </div>
                        <div class=" mt-64">
                            <h3>Amenities</h3>
                        </div>
                        <div class="room__servies">
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Airport Pickup</p>
                                        <img src="{{asset('assets/images/room-icon-1.svg')}}" alt="icon">
                                    </div>
                                    <p>Vestibulum pretium tortor purus ut nulla pulvinar neque.</p>
                                </div>
                            </div>
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Fiber Internet</p>
                                        <img src="{{asset('assets/images/room-icon-2.svg')}}" alt="icon">
                                    </div>
                                    <p>Diam euismod purus sagittis magna donec pellentesque arcu.</p>
                                </div>
                            </div>
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Fitness Center</p>
                                        <img src="{{asset('assets/images/room-icon-3.svg')}}" alt="icon">
                                    </div>
                                    <p>Gravida morbi dictum hendrerit id etiam duis dignissim vitae arcu.</p>
                                </div>
                            </div>
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Laundry Services</p>
                                        <img src="{{asset('assets/images/room-icon-4.svg')}}" alt="icon">
                                    </div>
                                    <p>Id cras sit molestie eget a que tempus blandit sed ultricies sed.</p>
                                </div>
                            </div>
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Lunch & Breakfast</p>
                                        <img src="{{asset('assets/images/room-icon-5.svg')}}" alt="icon">
                                    </div>
                                    <p>Odio felis vitae nullam ipsum oncus eu vestibulum.</p>
                                </div>
                            </div>
                            <div class="rooms__detail-card">
                                <div class="detail__card">
                                    <div class="detail__title">
                                        <p>Swimming Pool</p>
                                        <img src="{{asset('assets/images/room-icon-6.svg')}}" alt="icon">
                                    </div>
                                    <p>Sit feugiat ac odio fermentum eleifend viverra enim velit risus.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="rooms__rules mt-30">
                            <h3>Room Rules</h3>
                            <ul>
                                <li>Check-in time is 3:00 PM; check-out time is 11:00 AM.</li>
                                <li>No smoking allowed inside the room. Designated smoking areas are available outside. </li>
                                <li>Please conserve water and electricity by turning off lights and appliances when not in use.</li>
                                <li>Guests are responsible for locking the doors and securing their belongings.</li>
                                <li>Room keys must be returned at check-out. Lost keys incur a replacement fee. </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rooms__about">
                        <div class="rooms__about--stick">
                            <h6>Information</h6>
                            <div class="rooms__info">
                                <div class="rooms__information">
                                    <img src="{{asset('assets/images/size-icon.svg')}}" alt="size-icon"> 400 sq ft
                                </div>
                                <div class="rooms__information">
                                    <img src="{{asset('assets/images/men-icon.svg')}}" alt="men-icon"> 1-3 pepole
                                </div>
                                <div class="rooms__information">
                                    <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon"> 1 Bed
                                </div>
                                <div class="rooms__information">
                                    <img src="{{asset('assets/images/bathe-icon.svg')}}" alt="bathe-icon"> 2 Bathroom
                                </div>
                            </div>
                            <div class="rooms__span">
                                <span>Per Night:</span>
                                <span class="font-20"> $ 170.00 USD</span>
                            </div>
                            <div class="extra__servies mt-30">
                                <h6>Extra Services</h6>
                                <div class="extra__text">
                                    <span>Free Private Parking</span>
                                    <span>
                                <img src="{{asset('assets/images/room-icon-7.svg')}}" alt="icon">
                                </span>
                                </div>
                                <div class="extra__text">
                                    <span>Kids Play Area</span>
                                    <span>
                                <img src="{{asset('assets/images/room-icon-8.svg')}}" alt="icon">
                            </span>
                                </div>
                                <div class="extra__text">
                                    <span>Free Early Check in</span>
                                    <span>
                                   <img src="{{asset('assets/images/room-icon-9.svg')}}" alt="icon">
                                </span>
                                </div>
                                <div class="extra__text">
                                    <span>Delicious Meals & Snacks</span>
                                    <span>
                                <img src="{{asset('assets/images/room-icon-10.svg')}}" alt="icon">
                                </span>
                                </div>
                                <div class="extra__text mt-30 text-center">
                                    <a href="#" class="btn bg--orange btn--lr">  Book Room    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section section--simmiler-room">
            <div class="wrap">
                <div class="simmiler-room__content">
                    <span class="font-orange">
                        <img src="{{asset('assets/images/logo--room.svg')}}" alt="title-logo"> LUXURY COMFORT
                    </span>
                    <h2>SIMILAR ROOMS </h2>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="room__block mb-30 ">
                            <a href="{{ route('blog-detail') }}">
                                <div class="room__img ">
                                    <img src="{{asset('assets/images/rooms--img-4.jpg')}}" alt="room-img-3 ">
                                </div>
                                <div class="room__about ">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/images/size-icon.svg')}}" alt="size-icon ">
                                            <span class="room__text "> 650 sq ft</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/bed-icon.svg')}}" alt="bed-icon ">
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
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>