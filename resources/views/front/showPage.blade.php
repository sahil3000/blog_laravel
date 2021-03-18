@extends('front.layouts.base')
@section('title') {{$result[0]->name}} @endsection
@section('heading') 
    <h1>{{$result[0]->name}}</h1>
@endsection
@section('content')
    @foreach($result as $list)
    <div class="post-preview">
        {{$result[0]->description}}
    </div>
    @endforeach

@endsection