@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="col-md-2">
                <show-question id="{{$question->id}}"></show-question>
            </div>
        </div>
        <div class="col-md-10">
            {{ $question->content }}
        </div>

        <div>
            <h2>{{ $question->replies()->count() }} answer</h2>

            <div class="col-md-8" style="margin-top: 100px">
                <form action="{{ route('replies.store') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="question_id" value="{{ $question->id }}"/>
                    <input type="text" required name="content" class="form-control"
                           placeholder="reply to the question...">
                    <input type="submit" value="Post a answer"
                           style="padding: 10px 15px; color: #fff; margin-top: 10px; background-color: #ffb611; border: 0; border-radius: 2px">
                </form>
            </div>
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