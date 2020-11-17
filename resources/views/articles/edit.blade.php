@extends('layouts.themes')

@section('content')

<form method="post" action="/article/{{$article->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text" name="title" value="{{$article->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Article Body</label>
        <textarea class="form-control" row="" cols="" name="body">{{$article->body}}</textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>

</form>


@endsection