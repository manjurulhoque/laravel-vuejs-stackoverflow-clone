@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="col-md-2">
                <show-question></show-question>
            </div>
        </div>
        <div class="col-md-10">
            {{ $question->content }}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-2.2.3.js') }}"></script>
    <script src="{{ asset('js/jquery.upvote.js') }}"></script>
    <script>
        $('#topic').upvote();
    </script>
@endsection