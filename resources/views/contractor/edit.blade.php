@extends('layouts.contractor')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Service
                        </h3>
                    </div>
                    <form role="form" action="{{route('contractor.update',$service->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="service_name">Name<code>*</code></label>
                                <input type="text" class="form-control" name="service_name" id="service_name"
                                       placeholder="Enter Service Name" value="{{$service->service_name}}">
                                @error('service_name')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price"> Price</label>
                                <input type="number" class="form-control" name="price" id="price"
                                       placeholder="Enter Price" value="{{$service->price}}">
                                @error('price')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('contractor.index')}}" class="btn btn-secondary">Back</a>
                        </div>

                    </form>
                    <!-- /.card -->
                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->
        </div>





@endsection
