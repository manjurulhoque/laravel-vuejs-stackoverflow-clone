@extends('layouts.app')
@section('stylesheet')

    <style>
        .btn-custom {
            color: #fff;
            background-color: #1fa67b;
        }

        .btn-custom:hover,
        .btn-custom:focus {
            color: #fff;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-tagsinput.css') }}">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <form role="form" action="{{ route('user-profile.update', $user->name) }}" method="post"
                      autocomplete="off" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" value="{{ $user->profile->first_name }}" name="first_name" id="first_name"
                               class="form-control" placeholder="first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" value="{{ $user->profile->last_name }}" name="last_name" id="last_name"
                               class="form-control" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        @if($user->profile->image)
                            <img height="100px" width="100px" src="{{asset($user->profile->image)}}" alt="">
                        @endif
                        <input type="file" name="cover" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Skills</label>
                        <input type="text" name="skills" data-role="tagsinput">
                    </div>
                    <input type="submit" class="btn btn-custom btn-lg btn-block" value="Update profile">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
    <script>
        $('.bootstrap-tagsinput input').tagsinput({
            confirmKeys: [44],
        });
        $(document).ready(function () {
            $('.bootstrap-tagsinput input').attr("placeholder", 'enter your known skills..')
                .css("width", "200px")
                .css("padding-top", "5px")
                .css("padding-bottom", "5px")
        });
    </script>
@endsection

