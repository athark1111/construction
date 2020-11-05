@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Book Service') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form role="form" action="{{route('booking.store')}}" method="post">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="city">City<code>*</code></label>
                                    <select class="form-control city" name="city"
                                            style="width: 100%;">
                                        @forelse($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="area">Area<code>*</code></label>
                                    <select class="form-control area" id="area" name="area"
                                            style="width: 100%;">
                                        @forelse($areas as $area)
                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="constructors">Constructors<code>*</code></label>
                                    <select class="form-control constructors" id="constructors" name="constructors" style="width: 100%;">
                                        @forelse($constructors as $constructor)
                                            <option value="{{$constructor->id}}">{{$constructor->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div id="services">
                                    @forelse($services as $service)
                                        <div class="form-check form-check-inline" >
                                            <input class="form-check-input" name="services[]" type="checkbox" id="{{$service->id}}" value="{{$service->id}}" >
                                            <label class="form-check-label" for="{{$service->id}}" >{{$service->service_name}}({{$service->price}})</label>
                                        </div >
                                    @empty
                                    @endforelse

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        (function ($) {


            $(document).on('change', ".city", function (e) {
                e.preventDefault();
                let city = $(this).val();
                if(city) {
                    $.ajax({
                        processing : "true",
                        serverSide : "true",
                        url: "{{route('get.areas')}}",
                        type: "GET",
                        dataType: "json",
                        data: {
                            'city': city
                        },
                        success: function (data) {
                            console.log(data);
                            if (data) {
                                $('#area').empty();
                                $('#services').empty();
                                $.each(data, function (key, value) {
                                    $('#area').append('<option value="' + value + '">' + key + '</option>');
                                });
                            }
                        }
                    });
                }
            });

            $(document).on('change', ".area", function (e) {
                e.preventDefault();
                let area_id = $(this).val();
                if(area_id) {
                    $.ajax({
                        processing : "true",
                        serverSide : "true",
                        url: "{{route('get.constructors')}}",
                        type: "GET",
                        dataType: "json",
                        data: {
                            'area_id': area_id
                        },
                        success: function (data) {
                            console.log(data);
                            if (data) {
                                $('#constructors').empty();
                                $('#services').empty();
                                $('#services').html();
                                $.each(data, function (key, value) {
                                    $('#constructors').append('<option value="' + value + '">' + key + '</option>');
                                });
                            }
                        }
                    });
                }
            });

            $(document).on('change', ".constructors", function (e) {
                e.preventDefault();
                let constructor_id = $(this).val();
                if(constructor_id) {
                    $.ajax({
                        processing : "true",
                        serverSide : "true",
                        url: "{{route('get.services')}}",
                        type: "GET",
                        dataType: "json",
                        data: {
                            'constructor_id': constructor_id
                        },
                        success: function (data) {
                            $('#services').empty();
                            $('#services').html(data);
                        }
                    });
                }
            });


        })(jQuery);
    </script>
@endpush
