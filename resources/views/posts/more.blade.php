@extends('layouts.master')


@section('content')
<div class= "container" class="pt-4">
<div ><span class="label label-info"> Title : </span> <span class="label label-default" > {{$post->title}} </span> </div>
<br><br>
<div ><span class="label label-info"> Description : </span> <span class="label label-default" >  {{$post->description}} </span> </div>
<br>
<br>
<div ><span class="label label-info"> Post Creator : </span> <span class="label label-default" >{{$post->user->name}}</span> </div>
</div>
@endsection