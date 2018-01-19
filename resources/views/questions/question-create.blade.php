@extends('layouts.app')

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
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection