@extends('layouts.app')

@section('content')
    <table class="table table-responsive table-bordered">
        @foreach($questions as $question)
            <tr>
                <td>
                    <div class="col-md-9">
                        <a href="{{ route('questions.show', $question) }}">
                            <h4 class="text-success">{{ $question->title }}</h4>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection