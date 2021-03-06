<div class="navbar-header">
	<a class="navbar-brand" href="index.html"><img src="{{asset('/backEnd/admin')}}/assets/images/logo_light.png" alt=""></a>

	<ul class="nav navbar-nav visible-xs-block">
		<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
		<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
	</ul>
</div>


<div class="navbar-collapse collapse" id="navbar-mobile">
	<ul class="nav navbar-nav">
		<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
	</ul>

	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown language-switch">
			<a class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{asset('/backEnd/admin')}}/assets/images/flags/gb.png" class="position-left" alt="">
				English
				<span class="caret"></span>
			</a>

			<ul class="dropdown-menu">
				<li><a class="deutsch"><img src="{{asset('/backEnd/admin')}}/assets/images/flags/de.png" alt=""> Deutsch</a></li>
				<li><a class="ukrainian"><img src="{{asset('/backEnd/admin')}}/assets/images/flags/ua.png" alt=""> Українська</a></li>
				<li><a class="english"><img src="{{asset('/backEnd/admin')}}/assets/images/flags/gb.png" alt=""> English</a></li>
				<li><a class="espana"><img src="{{asset('/backEnd/admin')}}/assets/images/flags/es.png" alt=""> España</a></li>
				<li><a class="russian"><img src="{{asset('/backEnd/admin')}}/assets/images/flags/ru.png" alt=""> Русский</a></li>
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bubbles4"></i>
				<span class="visible-xs-inline-block position-right">Messages</span>
				<span class="badge bg-warning-400">2</span>
			</a>
			
			<div class="dropdown-menu dropdown-content width-350">
				<div class="dropdown-content-heading">
					Messages
					<ul class="icons-list">
						<li><a href="#"><i class="icon-compose"></i></a></li>
					</ul>
				</div>

				<ul class="media-list dropdown-content-body">
					<li class="media">
						<div class="media-left">
							<img src="{{asset('/backEnd/admin')}}/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
							<span class="badge bg-danger-400 media-badge">5</span>
						</div>

						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">James Alexander</span>
								<span class="media-annotation pull-right">04:58</span>
							</a>

							<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left">
							<img src="{{asset('/backEnd/admin')}}/{{asset('/backEnd/admin')}}/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
							<span class="badge bg-danger-400 media-badge">4</span>
						</div>

						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Margo Baker</span>
								<span class="media-annotation pull-right">12:16</span>
							</a>

							<span class="text-muted">That was something he was unable to do because...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left"><img src="{{asset('/backEnd/admin')}}/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Jeremy Victorino</span>
								<span class="media-annotation pull-right">22:48</span>
							</a>

							<span class="text-muted">But that would be extremely strained and suspicious...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left"><img src="{{asset('/backEnd/admin')}}/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Beatrix Diaz</span>
								<span class="media-annotation pull-right">Tue</span>
							</a>

							<span class="text-muted">What a strenuous career it is that I've chosen...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left">
						@if(Auth::guard('provider')->user()->image)         
			      			<img src="{{asset('/backEnd/admin')}}/assets/uploads/user/{{ Auth::guard('admin')->user()->image}}" class="img-circle img-sm" alt="">       
						@else
							<img src="{{asset('/backEnd/admin')}}/assets/images/user/demo.jpg" alt="">
						@endif
						</div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Richard Vango</span>
								<span class="media-annotation pull-right">Mon</span>
							</a>
							
							<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
						</div>
					</li>
				</ul>

				<div class="dropdown-content-footer">
					<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
				</div>
			</div>
		</li>

		<li class="dropdown dropdown-user">
			<a class="dropdown-toggle" data-toggle="dropdown">
				@if(Auth::guard('provider')->user()->image)         
      				<img src="{{asset('/backEnd/admin')}}/assets/uploads/user/{{ Auth::guard('provider')->user()->image}}" class="img-circle img-sm" alt="" height="30px" width="30px">       
				@else
					<img src="{{asset('/backEnd/admin')}}/assets/images/user/demo.jpg" alt="">
				@endif
					<span>{{ Auth::guard('provider')->user()->name}}</span>
					<i class="caret"></i>
			</a>

			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="{{route('provider.profile')}}"><i class="icon-user-plus"></i> My profile</a></li>
				<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
				<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
				<li><a href="{{route('provider.logout')}}"><i class="icon-switch2"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
</div>