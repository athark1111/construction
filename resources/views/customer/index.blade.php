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


                        <form role="form" action="" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="city">City<code>*</code></label>
                                    <select class="form-control city" name="city"
                                            style="width: 100%;">
                                        <option>Select City</option>
                                        @forelse($cities as $city)
                                            <option
                                                value="{{$city->id}}" {{(request()->get('city')==$city->id) ? 'selected' : ''}} >{{$city->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                @if(request()->get('city')>0)
                                    <div class="form-group">
                                        <label for="area">Area<code>*</code></label>
                                        <select class="form-control area" id="area" name="area"
                                                style="width: 100%;">
                                            <option>Select Area</option>
                                            @forelse($areas as $area)
                                                @if($area->city_id == request()->get('city'))
                                                    <option
                                                        value="{{$area->id}}" {{(request()->get('area')==$area->id) ? 'selected' : ''}}>{{$area->name}}</option>
                                                @endif
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                @endif

                                @if(request()->get('city')>0&&request()->get('area')>0)
                                    Contractor Name:
                                    <ul class="list-group">
                                        @forelse($constructors as $constructor)
                                            @if($constructor->area_id == request()->get('area'))
                                                <ul>
                                                    <li>
                                                        <a href="{{request()->fullUrl()}}&contractor={{$constructor->id}}" type="button"
                                                           class="">{{$constructor->name}}</a>
                                                    </li>
                                                </ul>
                                            @endif
                                        @empty
                                        @endforelse
                                    </ul>
                                @endif

                                @if(request()->get('city')>0&&request()->get('area')>0&&request()->get('contractor')>0)
                                    Services:
                                    <div id="services">
                                        @forelse($services as $service)
                                            @if($service->user_id == request()->get('contractor'))
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="services[]" type="checkbox"
                                                           id="{{$service->id}}" value="{{$service->id}}">
                                                    <label class="form-check-label"
                                                           for="{{$service->id}}">{{$service->service_name}}
                                                        ({{$service->price}})</label>
                                                </div>
                                            @endif
                                        @empty
                                        @endforelse
                                    </div>
                                @endif



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


{{--@push('scripts')--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script>--}}
{{--        (function ($) {--}}


{{--            $(document).on('change', ".city", function (e) {--}}
{{--                e.preventDefault();--}}
{{--                let city = $(this).val();--}}
{{--                if (city) {--}}
{{--                    $.ajax({--}}
{{--                        processing: "true",--}}
{{--                        serverSide: "true",--}}
{{--                        url: "{{route('get.areas')}}",--}}
{{--                        type: "GET",--}}
{{--                        dataType: "json",--}}
{{--                        data: {--}}
{{--                            'city': city--}}
{{--                        },--}}
{{--                        success: function (data) {--}}
{{--                            console.log(data);--}}
{{--                            if (data) {--}}
{{--                                $('#area').empty();--}}
{{--                                $('#services').empty();--}}
{{--                                $.each(data, function (key, value) {--}}
{{--                                    $('#area').append('<option value="' + value + '">' + key + '</option>');--}}
{{--                                });--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}

{{--            $(document).on('change', ".area", function (e) {--}}
{{--                e.preventDefault();--}}
{{--                let area_id = $(this).val();--}}
{{--                if (area_id) {--}}
{{--                    $.ajax({--}}
{{--                        processing: "true",--}}
{{--                        serverSide: "true",--}}
{{--                        url: "{{route('get.constructors')}}",--}}
{{--                        type: "GET",--}}
{{--                        dataType: "json",--}}
{{--                        data: {--}}
{{--                            'area_id': area_id--}}
{{--                        },--}}
{{--                        success: function (data) {--}}
{{--                            console.log(data);--}}
{{--                            if (data) {--}}
{{--                                $('#constructors').empty();--}}
{{--                                $('#services').empty();--}}
{{--                                $('#services').html();--}}
{{--                                $.each(data, function (key, value) {--}}
{{--                                    $('#constructors').append('<option value="' + value + '">' + key + '</option>');--}}
{{--                                });--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}

{{--            $(document).on('change', ".constructors", function (e) {--}}
{{--                e.preventDefault();--}}
{{--                let constructor_id = $(this).val();--}}
{{--                if (constructor_id) {--}}
{{--                    $.ajax({--}}
{{--                        processing: "true",--}}
{{--                        serverSide: "true",--}}
{{--                        url: "{{route('get.services')}}",--}}
{{--                        type: "GET",--}}
{{--                        dataType: "json",--}}
{{--                        data: {--}}
{{--                            'constructor_id': constructor_id--}}
{{--                        },--}}
{{--                        success: function (data) {--}}
{{--                            $('#services').empty();--}}
{{--                            $('#services').html(data);--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}


{{--        })(jQuery);--}}
{{--    </script>--}}
{{--@endpush--}}
