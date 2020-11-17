@extends('layouts.themes')


@section('content')

<a href="article/create">Add New Article</a>
<ul class="style1">

                @foreach($article as $article)
				<li class="first">
					<h3><a href="/article/show/{{$article->id}}"> {{$article->title}}</a> </h3>
					<p><a href="#">{{$article->body}}</a></p>
					<a class="btn btn-success" href="/article/{{$article->id}}/edit">Edit</a>
                </li>
                @endforeach
				
			</ul>
@endsection()