@extends('layouts.contractor')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title float-right">
                            <a href="javascript:" class="btn btn-primary">Add Service</a>
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
                                    <th>name</th>
                                    <th>city</th>
                                    <th>email</th>
                                    <th>image</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $arr->id }}</td>
                                    <td>{{ $arr->name }}</td>
                                    <td>{{ $arr->city }}</td>
                                    <td>{{ $arr->email }}</td>
                                    <td>{{ $arr->image }}</td>
                                    <td style="text-align:center;">
                                        <a href="" class="btn btn-info">Edit</a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"
                                           class="btn btn-danger">Delete</a>
                                        <form action="" method="POST">
                                            @method('DELETE')
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        </form>
                                    <td>
                                </tr>
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
