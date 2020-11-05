@extends('layouts.contractor')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Profile
                        </h3>
                    </div>
                    <form role="form" action="{{route('contractor.profile.update',$constructor->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name<code>*</code></label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Enter Name" value="{{$constructor->name}}">
                                @error('name')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city"> City</label>
                                <input type="text" class="form-control" name="city" id="city"
                                       placeholder="Enter City" value="{{$constructor->name}}">
                                @error('city')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <!-- /.card -->
                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->
        </div>





@endsection
