@extends('layouts.themes')

@section('content')

<a href="/article">View all the Articles</a>
 
<form>
    
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text" name="title" value="{{$article->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Article Body</label>
        <textarea class="form-control" row="" cols="" name="body">{{$article->body}}</textarea>
    </div>
</form>
<form method="post" action="/article/{{$article->id}}">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('Are you sure.?');" class="btn btn-danger">Delete Article</button>

</form>
    


@endsection