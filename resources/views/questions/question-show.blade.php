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

            <div style="margin-top: 150px">
                <h2>{{ $question->replies()->count() }} answer</h2>

                <table class="table">
                    <tbody>
                    @foreach ($question->replies as $reply)
                        <tr>
                            <td>{{ $reply->content }}</td>
                            <td>
                                answered {{ $reply->updated_at->diffForHumans() }}
                                {{ $reply->user->name }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="col-md-8" style="margin-top: 30px">
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
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-2.2.3.js') }}"></script>
    <script src="{{ asset('js/jquery.upvote.js') }}"></script>
    <script>
        $('#topic').upvote();
    </script>
@endsection