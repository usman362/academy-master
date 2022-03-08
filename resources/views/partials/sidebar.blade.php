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

		<li class="side-nav-item active">
			<a href="/dashboard" class="side-nav-link">
				<i class="dripicons-view-apps"></i>
				<span>Dashboard</span>
			</a>
		</li>

		{{-- <li class="side-nav-item ">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-network-1"></i>
				<span> Categories </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "">
					<a href="/Category">Categories</a>
				</li>

				<li class = "">
					<a href="/Category/create">Add new category</a>
				</li>
			</ul>
		</li> --}}

		<li class="side-nav-item">
			<a href="/Course" class="side-nav-link ">
				<i class="dripicons-archive"></i>
				<span>Lessons</span>
			</a>
		</li>

		
		<li class="side-nav-item ">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="mdi mdi-incognito"></i>
				<span> Instructors </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "">
					<a href="/Teacher">Instructor list</a>
				</li>

			</ul>
		</li>

		<li class="side-nav-item">
			<a href="/Student" class="side-nav-link ">
				<i class="dripicons-user-group"></i>
				<span>Students</span>
			</a>
		</li>

		<li class="side-nav-item ">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-network-3"></i>
				<span> Enrolment </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "">
					<a href="/Enroll">Enrol history</a>
				</li>

				<li class = "">
					<a href="/Enroll/create">Enrol a student</a>
				</li>
			</ul>
		</li>


	<li class="side-nav-item">
			<a href="/messages" class="side-nav-link ">
				<i class="dripicons-conversation"></i>
				<span>Messages</span>
			</a>
		</li>
		{{-- <li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-box"></i>
				<span> Report </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "" > <a href="/admin-revenue">Admin revenue</a> </li>
									<li class = "" >
						<a href="/instructor-revenue">
							Instructor revenue						</a>
					</li>
							</ul>
		</li> --}}

		
		{{-- <li class="side-nav-item">
			<a href="#" class="side-nav-link ">
				<i class="dripicons-message"></i>
				<span>Message</span>
			</a>
		</li> --}}
{{-- 
		<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-graph-pie"></i>
				<span> Addons </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "" >
					<a href="#">Addon manager</a>
				</li>
				<li class = "" >
					<a href="#">Available addons</a>
				</li>
			</ul>
		</li> --}}

		{{-- <li class="side-nav-item  ">
			<a href="javascript: void(0);" class="side-nav-link">
				<i class="dripicons-toggles"></i>
				<span> Settings </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "">
					<a href="#">System settings</a>
				</li>
				<li class = "">
					<a href="#">Website settings</a>
				
				<li class = "">
					<a href="#">Language settings</a>
				</li>
				
				<li class = "">
					<a href="#">About</a>
				</li>
			</ul>
		</li> --}}
		{{-- <li class="side-nav-item ">
			<a href="/manage-profile/{{Auth::User()->id}}" class="side-nav-link">
				<i class="dripicons-user"></i>
				<span>Manage profile</span>
			</a>
		</li>	 --}}
	</ul>
</div>