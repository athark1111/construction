@extends('layouts.contractor')
@section('content')



    <section class="content">
        <div class="container-fluid">

            <div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

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

    </section>
@endsection
@section('scripts')
    <script>
        /* $(document).ready(function () {
             $('#datatable2').DataTable();
         });*/
    </script>
@endsection
