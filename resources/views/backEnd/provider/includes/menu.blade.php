<div class="sidebar-category sidebar-category-visible">
	<div class="category-content no-padding">
		<ul class="navigation navigation-main navigation-accordion">

			<!-- Main -->
			<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
			<li><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
			<!-- /main -->					
			<li>
				<a href="{{route('provider.users.index')}}"><i class="icon-people"></i> <span>User</span></a>
				<ul>
					<li><a href="user_pages_cards.html">User cards</a></li>
					<li><a href="{{route('provider.users.index')}}">User list</a></li>
				</ul>
			</li>
			{{-- Admin menu --}}
			<li>
				<a href="#"><i class="icon-people"></i> <span>Admin</span></a>
				<ul>
					<li><a href="{{route('provider.admin.index')}}">Admin List</a></li>
				</ul>
			</li>
			<!-- /page kits -->

		</ul>
	</div>
</div>