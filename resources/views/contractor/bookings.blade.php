@extends('layouts.contractor')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Bookings
                        </h3>
                    </div>

                    <div class="card-body">
                        <table id="datatable2" class="table table-borderedtable-stripped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Customer Name</th>
                                <th>Constructor Name</th>
                                <th>Services</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($bookings as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->customer_name }}</td>
                                    <td>{{ $u->constructor_name }}</td>
                                    <td>
                                        @foreach($u->service_name as $name)
                                            <span class="badge">{{$name}}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $u->created_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No Bookings</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{ $bookings->links() }}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        /* $(document).ready(function () {
             $('#datatable2').DataTable();
         });*/
    </script>
@endpush
