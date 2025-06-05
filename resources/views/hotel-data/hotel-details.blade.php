<x-admin-dashboard>
    @section('meta')
        <title>Hotel Details</title>
    @endsection
    @section('content')
        <main class="site-main">
            <section class="section pt-2">
                <div class="wrap">
                    <div class="row">
                        @include('components.hotel-menubar')
                        <div class="col-9 mt-2">
                            <div class="section__title">
                                <h1 class="text-dark">Hotel Team Detail</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end mb-2">
                                    <a href="{{ route('newemploye') }}" class="btn btn-primary  btn--hover-orange" >add employe</a>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Post</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($HotelDetail as $detail)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $detail->name }}</td>
                                        <td>{{ $detail->email }}</td>
                                        <td>{{ $detail->phone }}</td>
                                        <td>{{ $detail->post }}</td>
                                        <td>
                                            <!-- Action Buttons (you can add your action buttons here, e.g., Edit, Delete) -->
                                            <a href="{{ route('edit-employe', $detail->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('delete', $detail->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection
</x-admin-dashboard>
