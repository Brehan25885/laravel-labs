@extends('layouts.master')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
<form method="post" action="/posts/{{$posts->id}}/update">
{{csrf_field()}}

Title :- <input type="text" name="title" value="{{$posts->title}}">
<br><br>
Description :- 
<textarea name="description" value="{{$posts->description}}" ></textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
@endsection