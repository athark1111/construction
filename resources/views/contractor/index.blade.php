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
                        <h3 class="card-title float-right">
                            <a href="{{route('contractor.create')}}" class="btn btn-primary">
                                Add Service
                            </a>
                        </h3>
                        <h3 class="card-title float-left">
                            Constructor Services
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-borderedtable-stripped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Constructor Name</th>
                                    <th>Service Name</th>
                                    <th>Service Price</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($arr->services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ ucfirst($arr->name) }}</td>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->price }}</td>
                                        <td style="text-align:center;">
                                            <a href="{{route('contractor.edit',$service->id)}}" class="btn btn-info">Edit</a>
                                            <form action="{{route('contractor.destroy',$service->id)}}" method="POST"
                                                  onsubmit="return confirm('Are you sure?');"
                                                  style="display: inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                            </form>
                                        <td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>





@endsection
