<x-admin-dashboard>
    @section('meta')
        <title>Visitor Add</title>
    @endsection
    @section('content')
        <section class="section pt-2">
            <div class="wrap">
                <div class="row">
                    @include('components.hotel-menubar')
                    <div class="col-9">
                        <div class="section__title">
                            <h1 class="text-dark">Hotel Visitors</h1>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end mb-2">
                                <a href="{{ route('visitordetail') }}" class="btn btn-primary  btn--hover-orange">All
                                    Visitor</a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('visitornew') }}" enctype="multipart/form-data"
                            class="col-6">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name_visitor" id="name"
                                    class="form-control @error('name_visitor') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                @error('name_visitor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img_visitor"class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone_visitor" id="phone" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Visitor</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-admin-dashboard>
