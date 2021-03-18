@extends('admin.layouts.base')
@section('title') Post @endsection
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Admin Dashboard</h1>
		
		<!-- All Posts -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-sm-6"><h6 class="m-0 font-weight-bold text-primary">Posts</h6></div>
					<div class="col-sm-6 text-right"><a href="{{ url('admin/post/add') }}" class="btn btn-outline-success" >Add Post</a></div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th width="5%">SNO</th>
								<th width="45%">Title</th>
								<th width="15%">Image</th>
								<th width="15%">Post Date</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0 ?>
							@foreach($result as $list)
							<tr>
								<td> {{++$i}} </td>
								<td>{{$list->title}}</td>
								<td> <image src="{{asset('storage').'/'.$list->image}}" width="100" height="100" alt="image" /> </td>
								<td> {{$list->post_date}} </td>
								<td>
									<a href="{{ url('admin/post/edit/'.$list->id) }}" class="btn btn-sm btn-info" >Edit</a>
									<a href="{{ url('admin/post/delete/'.$list->id) }}" class="btn btn-sm btn-danger" >Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection