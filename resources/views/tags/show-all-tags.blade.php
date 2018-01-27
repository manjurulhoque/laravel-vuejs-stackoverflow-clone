@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($tags as $tag)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('tag-questions', $tag) }}">
                            <strong>{{$tag->name}}</strong>
                        </a>
                    </div>
                    <div class="panel-body">
                        <strong>Total questions: {{ $tag->questions()->count() }}</strong>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection