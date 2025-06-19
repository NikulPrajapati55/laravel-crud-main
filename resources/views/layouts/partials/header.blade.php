
<div id="wrapper">
    <header class="site-header ">
        <div class="wrap header--wrap">
            <div class="site__logo">
                <a href="{{ route('home') }}" target="_self">
                    <img src="{{asset('assets/images/cruise-logo.svg')}}" alt="cruise-logo">
                </a>
            </div>
            <div class="header__menu">
                <nav class="navbar">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">HOME</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">ABOUT US</a>
                        </li>
                        <li>
                            <a href="{{ route('rooms') }}">ROOMS</a>
                        </li>
                        <li>
                            <a href="{{ route('resources') }}">RESOURCES</a>
                        </li>
                        <li>
                            <a href="{{ route('store') }}">Store</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" >contact us <span></span></a>
                        </li>
                         <li>
                            <a href="{{ route('login') }}"class="btn btn--border btn--hover-orange ">Log In<span></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
