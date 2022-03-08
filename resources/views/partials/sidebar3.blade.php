<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="#">
			<img src="{{asset('backend/image/placeholder.png')}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
						<span class="leftbar-user-name">{{Auth::User()->name}} {{Auth::User()->lname}}</span>
		</a>
	</div>

	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light">

		<li class="side-nav-title side-nav-item">Navigation</li>

	
		<li class="side-nav-item">
			<a href="/become-instructor/{{Auth::User()->id}}" class="side-nav-link ">
				<i class="dripicons-archive"></i>
				<span>Become an Instructor</span>
			</a>
		</li>

	
{{-- 		
		<li class="side-nav-item">
			<a href="#" class="side-nav-link ">
				<i class="dripicons-message"></i>
				<span>Message</span>
			</a>
		</li> --}}

	
		<li class="side-nav-item ">
			<a href="/user_profile" class="side-nav-link">
				<i class="dripicons-user"></i>
				<span>Manage profile</span>
			</a>
		</li>	
	</ul>
</div>