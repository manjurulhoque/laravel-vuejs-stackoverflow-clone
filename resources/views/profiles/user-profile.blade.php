@extends('layouts.app')
@section('stylesheet')

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/profile.css") }}">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="well profile">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            @if($user->profile->first_name && $user->profile->last_name)
                                <h2>{{ $user->profile->first_name }} {{ $user->profile->last_name }}</h2>
                            @else
                                <h2>{{ $user->name }}</h2>
                            @endif
                            <p><strong>About: </strong> Web Designer / UI. </p>
                            <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new
                                things. </p>
                            <strong>Skills: </strong>
                            <p>
                                @if($user->profile->skills)
                                    @foreach(explode(',', $user->profile->skills) as $skill)
                                        <span class="tags">{{ $skill }}</span>
                                    @endforeach
                                @else
                                    <h5>No skill</h5>
                                @endif
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            @if(Auth::id() != $user->id)
                                <button class="btn btn-success btn-block pull-right" style="margin-top: 20px">
                                    <span class="fa fa-plus-circle"></span> Follow
                                </button>
                            @else
                                <a href="{{ route('user-profile.edit', $user->name) }}"
                                   class="btn btn-danger btn-block pull-right" style="margin-top: 20px">
                                    <span class="fa fa-plus-circle"></span> Edit profile
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 divider text-center">
                        <div class="col-xs-12 col-sm-6 emphasis">
                            <h2><strong> 20,7K </strong></h2>
                            <p>
                                <small>Followers</small>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 emphasis">
                            <h2><strong>245</strong></h2>
                            <p>
                                <small>Following</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

