@extends('front.layouts.base')
@section('title') Home @endsection
@section('heading') 
    <h1>My Blog</h1>
    <span class="subheading">A Blog Site by Sahil Manhotra</span>
@endsection
@section('content')
    @foreach($posts as $post)
    <div class="post-preview">
    <!-- <h2 class="post-title">vxjnfvcn</h2> -->
        <a href="{{ url('/detail/'.$post->slug) }}">
            <h2 class="post-title">{{ $post->title }}</h2>
            <h3 class="post-subtitle"> {{ $post->short_desc }} </h3>
        </a>
        <p class="post-meta">Posted by Sahil Manhotra on {{ $post->post_date }}</p>
    </div>
    @endforeach
    {{ $posts->links('pagination::bootstrap-4') }}
@endsection

