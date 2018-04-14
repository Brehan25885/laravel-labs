@extends('layouts.master')


@section('content')
<div class="container">
<h1 class="text-center">Posts Index</h1>
<a href="posts/create" class="btn btn-success">Create New Post </a>
<br>
<br>


<table class="table">
<tbody>
@foreach ($posts as $post)
<tr>
<td>
{{ $post->title }} </td>
<td>
<a class="btn btn-info" href="posts/{{$post->id}}/more" role="button">View</a>
</td>
<td >
<form method="post" action="/posts/{{$post->id}}" >
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
</form>
</td>
<td >
<form method="get" action="/posts/{{$post->id}}/edit" >
    {{csrf_field()}}
    {{method_field('EDIT')}}
    <button type="submit" class="btn btn-primary" > Edit </button>
</form>
</td>
</tr>
</tbody>

@endforeach
</table>
</div>


@endsection