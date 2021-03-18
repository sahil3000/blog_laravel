@extends('front.layouts.base')
@section('title') Home @endsection
@section('heading') 
    <h1>My Blog</h1>
    <span class="subheading">A Blog Site by Sahil Manhotra</span>
@endsection
@section('content')
    @foreach($result as $list)
    <div class="post-preview">
        <a href="{{ url('/detail/'.$list->slug) }}">
            <h2 class="post-title">{{ $list->title }}</h2>
            <h3 class="post-subtitle"> {{ $list->short_desc }} </h3>
        </a>
        <p class="post-meta">Posted by Sahil Manhotra on {{ $list->post_date }}</p>
    </div>
    @endforeach

@endsection

