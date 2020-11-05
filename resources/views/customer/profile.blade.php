@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Profile
                        </h3>
                    </div>
                    <form role="form" action="{{route('customer.profile.update',$constructor->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name<code>*</code></label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Enter Name" value="{{$constructor->name}}" required>
                                @error('name')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email<code>*</code></label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Enter Name" value="{{$constructor->email}}" required>
                                @error('email')
                                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city_id"> City</label>
                                <select name="city_id" id="city_id" class="form-control">
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}" {{($city->id==$constructor->city_id) ? 'selected' : ''}}>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="area_id"> Area</label>
                                <select name="area_id" id="area_id" class="form-control">
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}"  {{($area->id==$constructor->area_id) ? 'selected' : ''}}>{{$area->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone<code>*</code></label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="Enter Phone" value="{{$constructor->phone}}" required>
                                @error('phone')
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
