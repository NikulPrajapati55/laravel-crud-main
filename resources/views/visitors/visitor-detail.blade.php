<x-admin-dashboard>
    @section('meta')
    @endsection
    @section('content')
        @if ($message = Session::get('success'))
            ;
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <main class="site-main">
            <section class="section pt-0">
                <div class="wrap-fuild">
                    <div class="row">
                        @include('components.hotel-menubar')
                        <div class="col-9 pt-5">
                            <div class="section__title">
                                <h1 class="text-dark">Hotel Visitors</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end mb-2">
                                    <a href="{{ route('visitoradd') }}" class="btn btn-primary  btn--hover-orange">Add
                                        Visitor</a>
                                </div>
                            </div>
                            <table class="table table-hover table-success">
                                <thead>
                                    <tr>
                                        <td>Sr No</td>
                                        <td>Name</td>
                                        <td>Image</td>
                                        <td>Phone</td>
                                        <td>Edit</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visitordetail as $visitor)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $visitor->name }}</td>
                                            <td>
                                                @if (isset($visitor) && $visitor->image)
                                                    <img src="{{ Storage::url($visitor->image) }}"
                                                        alt="Visitor Image" width="40" height="40" style="border-radius: 50%">
                                                @endif
                                            </td>
                                            <td>{{ $visitor->phone }}</td>
                                            <td>
                                                <a href="{{ route('edit-visitor', $visitor->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('visitordelete', $visitor->id) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
</x-app-layout>
