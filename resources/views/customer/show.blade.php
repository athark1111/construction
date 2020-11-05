@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contractor Services') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form role="form" action="{{route('booking.store')}}" method="post">
                            @csrf
                            <div class="card-body">


                                <div id="services">
                                    @forelse($contractor->services as $service)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="services[]" type="checkbox"
                                                   id="{{$service->id}}" value="{{$service->id}}">
                                            <label class="form-check-label"
                                                   for="{{$service->id}}">{{$service->service_name}}({{$service->price}}
                                                )</label>
                                        </div>
                                    @empty
                                        <h3>No Services</h3>
                                    @endforelse
                                    @error('services')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('customer')}}" class="btn btn-secondary">Back</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
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
    {{--                            if (data) {--}}
    {{--                                $('#constructors').html();--}}
    {{--                                $('#constructors').html(data);--}}
    {{--                            }--}}
    {{--                        }--}}
    {{--                    });--}}
    {{--                }--}}
    {{--            });--}}

    {{--            --}}{{--$(document).on('change', ".constructors", function (e) {--}}
    {{--            --}}{{--    e.preventDefault();--}}
    {{--            --}}{{--    let constructor_id = $(this).val();--}}
    {{--            --}}{{--    if(constructor_id) {--}}
    {{--            --}}{{--        $.ajax({--}}
    {{--            --}}{{--            processing : "true",--}}
    {{--            --}}{{--            serverSide : "true",--}}
    {{--            --}}{{--            url: "{{route('get.services')}}",--}}
    {{--            --}}{{--            type: "GET",--}}
    {{--            --}}{{--            dataType: "json",--}}
    {{--            --}}{{--            data: {--}}
    {{--            --}}{{--                'constructor_id': constructor_id--}}
    {{--            --}}{{--            },--}}
    {{--            --}}{{--            success: function (data) {--}}
    {{--            --}}{{--                $('#services').empty();--}}
    {{--            --}}{{--                $('#services').html(data);--}}
    {{--            --}}{{--            }--}}
    {{--            --}}{{--        });--}}
    {{--            --}}{{--    }--}}
    {{--            --}}{{--});--}}


    {{--        })(jQuery);--}}
    {{--    </script>--}}
@endpush
