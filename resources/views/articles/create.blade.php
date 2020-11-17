@extends('layouts.themes')

@section('content')

<form method="post" action="/article">
    @csrf
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text" name="title" class="form-control">
        @error("title")
        <p style="color:red">{{$errors->first("title")}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Article Body</label>
        <textarea class="form-control" row="" cols="" name="body"></textarea>
        @error("body")
        <p style="color:red">{{$errors->first("body")}}</p>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>

</form>


@endsection
