@extends('front.layouts.base')
@section('title') {{$result[0]->title}} @endsection
@section('heading') 
    <h1>{{$result[0]->title}}</h1>
    <span class="subheading">{{$result[0]->short_desc}}</span>
    <p class="post-meta">Posted by Sahil Manhotra on {{ $result[0]->post_date }}</p>
@endsection
@section('content')
    {{$result[0]->long_desc}}
    <div class="text-center mt-3">
        <img  class="img-fluid img-thumbnail" src="{{ asset('storage/'.$result[0]->image) }}"  width="400" alt="image" > <br>
    </div>
    <p class="post-meta">Posted by Sahil Manhotra on {{ $result[0]->post_date }}</p>
@endsection

