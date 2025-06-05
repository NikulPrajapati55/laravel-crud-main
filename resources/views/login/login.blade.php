<x-admin-dashboard>
    @section('meta')
        <title>Login page</title>
    @endsection
    @section('content')
        <main class="site-main">
            <section class="section login-section bg-dark" style="padding-top:50px ">
                <div class="wrap">
                    @error('user_email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                    <div class="book-wrapper">
                        <div class="book">
                            <div class="login-page d-flex justify-content-center gap-0">
                                <div class="login-card card-left card col-4">
                                    <form action="{{ route('veroficationlogin') }}" method="post">
                                        @csrf
                                        <div>
                                            <h3 class="text-center">Login</h3>
                                            <div class="login-input mt-5">
                                                <input type="email" name="verify_email" id="verify_email" required />
                                                <label for="verify_email">Your Email</label>
                                            </div>
                                            <div class="login-input mt-5">
                                                <input type="password" name="verify_password" minlength="8" maxlength="8"
                                                    id="verify_password" required />
                                                <label for="verify_password">Your Password</label>
                                                @if (session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>

                                                @endif
                                            </div>
                                            <div class="login-input mt-4 d-flex justify-content-between gap-2">
                                                <input class="text-white" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Button to Open Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Sign In
                        </button>

                        <!-- Login Modal -->
                        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content p-3">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel">Sign In</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <div class="login-card card-right card">
                                            <form action="{{ route('newlogin') }}" method="POST">
                                                @csrf
                                                <div class="login-input mt-5">
                                                    <input type="text" name="user_name" id="user_name" required
                                                        class="form-control" />
                                                    <label for="user_name">Your Name</label>
                                                </div>
                                                <div class="login-input mt-5">
                                                    <input type="email" name="user_email" id="user_email" required
                                                        class="form-control" />
                                                    <label for="user_email">Your Email</label>
                                                </div>
                                                <div class="login-input mt-5">
                                                    <input type="password" minlength="8" maxlength="8"
                                                        name="user_password" id="user_password" required
                                                        class="form-control" />
                                                    <label for="user_password">Your Password</label>
                                                </div>
                                                <div class="mt-4 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-success px-4">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    @endsection
</x-admin-dashboard>
