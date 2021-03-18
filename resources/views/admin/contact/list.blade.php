@extends('admin.layouts.base')
@section('title') Contact @endsection
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
					<h6 class="m-0 font-weight-bold text-primary">Contact</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th width="5%">SNO</th>
								<th width="25%">Name</th>
								<th width="25%">Email</th>
								<th width="45%">Message</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0 ?>
							@foreach($result as $list)
							<tr>
								<td> {{++$i}} </td>
								<td>{{$list->name}}</td>
								<td>{{$list->email}}</td>
								<td>{{$list->message}}</td>
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