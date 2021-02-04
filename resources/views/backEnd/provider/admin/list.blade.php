@extends('backEnd.provider.layout.main')
@section('panel-title', 'Create Admin')

@section('content')
	<div class="panel panel-flat">
		<div class="panel-body">
			<form class="form-horizontal" action="{{ route('provider.admin.store') }}" method="POST" id="add">
				@csrf
				<fieldset class="content-group">
					<div class="form-group">
						<label class="control-label col-lg-2">Name</label>
						<div class="col-lg-10">
							<input type="text" required class="form-control" name="name" placeholder="Enter your name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">Email</label>
						<div class="col-lg-10">
							<input type="email" required class="form-control" name="email" placeholder="Enter Email Address">
						</div>
					</div>
					{{-- <div class="form-group">
						<label class="control-label col-lg-2">Phone</label>
						<div class="col-lg-10">
							<input type="text" required class="form-control" name="phone" placeholder="Enter your phone">
						</div>
					</div> --}}

					<div class="form-group">
						<label class="control-label col-lg-2">Address</label>
						<div class="col-lg-10">
							<textarea rows="5" cols="5" required class="form-control" name="address" placeholder="Enter your address"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-4 col-lg-offset-2">
							<input type="submit" class="btn btn-success ">
							<input type="reset" class="btn btn-danger">
						</div>
					</div>
				</fieldset>

			</form>
		</div>
		<div class="content">
			<div class="panel panel-flat">
				<table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($admins as $admin)
							<tr>
								<td> {{$admin->name}} </td>
								<td> {{$admin->email}} </td>
								<td> {{$admin->address}} </td>
								<td>  
									<a href="{{route('provider.admin.update',[$admin->id])}}" class="btn btn-primary btn-sm">
										<i class="icon-pencil7"></i>
									</a>
									<a href="{{route('provider.admin.destroy',[$admin->id])}}" class="btn btn-primary btn-sm">
										<i class="icon-trash"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
        $('#myTable').DataTable({
            dom: 'lBfrtip',
                "iDisplayLength": 10,
                "lengthMenu": [ 10, 25,30, 50 ],
        });

    </script>
@endsection
