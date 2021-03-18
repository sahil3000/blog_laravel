@extends('admin.layouts.base')
@section('title') Add Post @endsection
@section('content')
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold ">Add Post</h1>
                                    </div>

                                    <form class="user" method="post" action="" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="title" placeholder="Enter title">
                                            @error('title')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="slug" placeholder="Enter slug">
                                            @error('slug')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="short_desc" placeholder="Enter short description">
                                            @error('short_desc')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-user" name="long_desc" placeholder="Enter long description"></textarea>
                                            @error('long_desc')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-user"
                                                name="post_date" id="post_date">
                                            @error('post_date')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image">
                                            @error('image')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
<!-- End of Main Content -->
@endsection