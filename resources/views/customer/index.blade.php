@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form role="form" action="{{route('contractor.store')}}" method="post">
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
                                    <select class="form-control" id="area" name="area"
                                            style="width: 100%;">
                                        @forelse($areas as $area)
                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
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
                                $.each(data, function (key, value) {
                                    // alert(key);
                                    $('#area').append('<option value="' + value + '">' + key + '</option>');

                                });
                            }
                        }
                    });
                }
            });


        })(jQuery);
    </script>
@endpush
