@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ asset("css/select2.min.css") }}">
@endsection

@section('content')
    <div class="col-md-9 col-md-offset-1">
        <form action="{{ route('questions.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" required class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea rows="5" name="content" required class="form-control" id="content"></textarea>
            </div>
            <div class="form-group">
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection