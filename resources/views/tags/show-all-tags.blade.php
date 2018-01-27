@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($tags as $tag)
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">{{$tag->name}}</div>
                    <div class="panel-body">
                        Total questions: {{ $tag->questions()->count() }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection