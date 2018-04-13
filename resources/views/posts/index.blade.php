@extends('layouts.master')


@section('content')
<h1>Posts Index</h1>
<a href="posts/create">Create New Post </a>
<br>
<br>
<ul>

@foreach ($posts as $post)


<li>{{ $post->title }} 

 <form method="post" action="/posts/{{$post->id}}" >
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
</form>
<form method="get" action="/posts/{{$post->id}}/edit" >
    {{csrf_field()}}
    {{method_field('EDIT')}}
    <button type="submit" class="btn btn-primary" > Edit </button>
</form>
</li>


@endforeach


</ul>

@endsection