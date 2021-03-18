@extends('admin.layouts.base')
@section('title') Update Page @endsection
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
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold ">Update Page</h1>
                                    </div>

                                    <form class="user" method="post" action="{{ url('admin/page/edit/'.$data[0]->id) }}" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="name" value="{{$data[0]->name}}" placeholder="Enter name">
                                            @error('name')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="slug" value="{{$data[0]->slug}}" placeholder="Enter slug">
                                            @error('slug')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-user" name="description" placeholder="Enter long description">{{$data[0]->description}}</textarea>
                                            @error('description')
                                            <span class="text-danger"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
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