<x-admin-dashboard>
    @section('meta')
        <title>New-employe</title>
    @endsection
    @section('content')
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <section class="section section--employe pt-0">
            <div class="wrap-fuild">
                <div class="row justify-content-center">
                    @include('components.hotel-menubar')
                    <div class="col-9 pt-5">
                        <div class="section__title">
                            <h1 class="text-dark">Edit</h1>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end mb-2">
                                <a href="{{ route('hotel-details')}}" class="btn btn-primary btn--hover-orange">All Employe Data</a>
                            </div>
                        </div>
                        <div class="form__data card p-4">
                            <h3> Employe Name {{$HotelDetail->name}}</h3>
                            <form method="POST" action="{{ route('update', $HotelDetail->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name_employe" id="name" value="{{ old('name', $HotelDetail->name) }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email_employe" id="email" value="{{ old('name', $HotelDetail->email) }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone_employe" id="phone" value="{{ old('name', $HotelDetail->phone) }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Post</label>
                                    <select name="post_employe" class="form-control" required>
                                        <option value="">-- Select Post --</option>
                                        <option value="Manager" {{ $HotelDetail->post == "Manager" ? 'selected' : '' }}>Manager</option>
                                        <option value="Receptionist" {{ $HotelDetail->post == "Receptionist" ? 'selected' : '' }}>Receptionist</option>
                                        <option value="Housekeeping" {{ $HotelDetail->post == "Housekeeping" ? 'selected' : '' }}>Housekeeping</option>
                                        <option value="Security" {{ $HotelDetail->post == "Security" ? 'selected' : '' }}>Security</option>
                                        <!-- Add more as needed -->
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Save Employee</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-admin-dashboard>
