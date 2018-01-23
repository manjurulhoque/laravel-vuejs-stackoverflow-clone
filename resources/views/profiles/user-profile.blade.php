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
                            <h2>Nicole Pearson</h2>
                            <p><strong>About: </strong> Web Designer / UI. </p>
                            <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new
                                things. </p>
                            <p><strong>Skills: </strong>
                                <span class="tags">html5</span>
                                <span class="tags">css3</span>
                                <span class="tags">jquery</span>
                                <span class="tags">bootstrap3</span>
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

