<x-app-layout>
    @section('meta')
    <title>Contact</title>
    @endsection
    @section('content')
    <main class="site-main">
        <section class="section section--contact pt-0 section--border">
            <div class="wrap">
                <div class="page__title">
                    <span class="font-orange">
                    <img src="{{asset('assets/images/logo--room.svg')}}" alt="title-logo"> GET IN TOUCH
                </span>
                    <h1>Contact us</h1>
                </div>
                <div class="row align-center">
                    <div class="col-6 ">
                        <div class="contact__form">
                            <form action="{{ route('mail') }}" method="POST" class="contact__box ">
                                @csrf
                                <div class="form__box">
                                    <div class="contact__name">
                                        <label for="name">First name*</label>
                                        <input type="text" id="name" name="firstname" class="form-control" required>
                                    </div>
                                    <div class="contact__name">
                                        <label for="last name">Last name</label>
                                        <input type="text" id="lastname" name="lastname" class="form-control">
                                    </div>
                                </div>
                                <div class="form__box">
                                    <div class="contact__name">
                                        <label for="email">Email address*</label>
                                        <input type="email" id="email" name="email" class="form-control"required>
                                    </div>
                                    <div class="contact__name">
                                        <label for="Phone number">Phone number</label>
                                        <input type="text" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="text__area">
                                    <label for="message">Write your message here *</label>
                                    <textarea name="msg" class="form-control" required>
                                </textarea>
                                </div>
                                <div class="check__box">
                                    <div class="checkbox">
                                        <input id="cheakl" type="checkbox">
                                        <label for="checkbox">I here by agree to the<a class="terms__condition" href="#"> Terms & Conditions</a> of Cruise</label>
                                    </div>
                                    <div class="btn__all room--btn">
                                        <button type="submit" class="btn bg--orange">Send</button>
                                        <div class="btn__icon--black"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="contact__img">
                            <img src="{{asset('assets/images/contact-img.jpg')}}" alt="img">
                        </div>
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

        <section class="section section--gift ">
            <div class="wrap ">
                <div class="gift__content text-center ">
                    <img src="{{asset('assets/images/gift--.svg')}}" alt="gift-svg ">
                    <h2>SURPRISE YOUR LOVED ONES WITH HOTEL CRUISE GIFT CARDS.</h2>
                    <p>Sed gravida fringilla malesuada vel eleifend enim urna maecenas id. Neque turpis volutpat mollis donec odio velit faucibus. Non nibh dapibus faucibus diam fringilla volutpat sollicitudin.</p>
                    <div class="gift__btn ">
                        <a href="# " class="btn bg--orange btn--big ">Join your Tearm</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>
