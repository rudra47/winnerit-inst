<div class="sidebar-category sidebar-category-visible">
	<div class="category-content no-padding">
		<ul class="navigation navigation-main navigation-accordion">

			<!-- Main -->
			<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
			<li class="{{request()->is('admin/home') ? 'active' : ''}}"><a href="{{route('admin.home')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
			<!-- /main -->					
			{{-- <li>
				<a href="{{route('admin.users.index')}}"><i class="icon-people"></i> <span>User</span></a>
				<ul>
					<li class="{{request()->is('admin/users*') ? 'active' : ''}}"><a href="{{route('admin.users.index')}}">User list</a></li>
				</ul>
			</li> --}}
			<li class="{{request()->is('admin/staff*') ? 'active' : ''}}">
				<a href="{{route('admin.staff.index')}}"><i class="icon-people"></i> <span>Staff</span></a>
			</li>
			<li class="{{request()->is('admin/collection*') ? 'active' : ''}}">
				<a href="{{route('admin.collection.list')}}"><i class="icon-stack"></i> <span>Collection</span></a>
			</li>
			<li class="{{request()->is('admin/student*') ? 'active' : ''}}">
				<a href="{{route('admin.student.index')}}"><i class="icon-width"></i> <span>Student</span></a>
			</li>
			<li class="{{request()->is('admin/course*') ? 'active' : ''}}">
				<a href="{{route('admin.course.index')}}"><i class="icon-pencil3"></i> <span>Course</span></a>
			</li>
			<li class="{{request()->is('admin/batch*') ? 'active' : ''}}">
				<a href="{{route('admin.batch.index')}}"><i class="icon-versions"></i> <span>Batch</span></a>
			</li>
			<li>
				<a href="#"><i class="icon-wrench3"></i> <span>Back Office Setup</span></a>
				<ul>
					<li class="{{request()->is('admin/designation*') ? 'active' : ''}}">
						<a href="{{route('admin.designation.index')}}"><i class="icon-upload"></i> <span>Designation</span></a>
					</li>
					<li class="{{request()->is('admin/paymentMethod*') ? 'active' : ''}}">
						<a href="{{route('admin.paymentMethod.index')}}"><i class="icon-indent-decrease2"></i> <span>Payment Method</span></a>
					</li>
				</ul>
			</li>
			<!-- /page kits -->
		</ul>
	</div>
</div>