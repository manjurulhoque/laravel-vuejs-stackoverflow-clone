@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="col-md-2">
                <show-question id="{{$question->id}}" whom_question="{{ $question->user->id }}"></show-question>
            </div>
        </div>
        <div class="col-md-10">
            {{ $question->content }}

            <div style="margin-top: 150px">
                <h2>{{ $question->replies()->count() }} answer</h2>

                @foreach ($question->replies as $reply)
                    <table class="table table-responsive">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <div class="post-text">
                                    {{ $reply->content }}
                                </div>
                                <table class="fw">
                                    <tbody>
                                    <tr>
                                        <td align="right" class="post-signature">
                                            <div class="user-info user-hover pull-right">
                                                <div class="user-action-time">
                                                    answered {{ $reply->updated_at->diffForHumans() }}
                                                </div>
                                                <div class="user-gravatar32">
                                                    <a href="#">
                                                        <div class="gravatar-wrapper-32"><img
                                                                    src="../{{ $reply->user->profile->image }}"
                                                                    alt="" width="32" height="32"></div>
                                                    </a>
                                                </div>
                                                <div class="user-details">
                                                    <a href="#">{{ $reply->user->name }}</a>
                                                    <div class="-flair">
                                                        <span class="reputation-score" title="reputation score "
                                                              dir="ltr">{{ $reply->user->profile->reputation }}</span>
                                                        {{--<span title="1 gold badge"><span--}}
                                                                    {{--class="badge1"></span><span--}}
                                                                    {{--class="badgecount">1</span></span><span--}}
                                                                {{--title="8 silver badges"><span--}}
                                                                    {{--class="badge2"></span><span--}}
                                                                    {{--class="badgecount">8</span></span><span--}}
                                                                {{--title="26 bronze badges"><span--}}
                                                                    {{--class="badge3"></span><span--}}
                                                                    {{--class="badgecount">26</span></span>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
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