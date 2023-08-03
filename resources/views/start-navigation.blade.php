<!-- Start Navigation -->
<div class="header header-light dark-text head-shadow">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand" href="#">
					<img src="images/meshlinks-logo.png" class="m-0 p-0" alt="" />
				</a>
				@if(!session('companyUser'))
				<div class="nav-toggle"></div>
				@endif
				<div class="mobile_nav">
					@if(session('companyUser'))

					<ul>
					{{-- <li>
						<a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
							<i class="lni lni-user"></i>
						</a>
					</li> --}}
					<li>
						<a href="company-logout" class="crs_yuo12 w-auto text-white theme-bg">
							<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Logout</span>
						</a>
					</li>
					</ul>
					@else
						<ul>
						<li>
							<a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
								<i class="lni lni-user"></i>
							</a>
						</li>
						<li>
							<a href="company-signin" class="crs_yuo12 w-auto text-white theme-bg">
								<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
							</a>
						</li>
						</ul>
					@endif
				</div>
			</div>
			<div class="nav-menus-wrapper" style="transition-property: none; margin: 0 !important;">
				@if(!session('companyUser'))
				<ul class="nav-menu">
				
					<li><a href="/">Home</a>
						{{-- <ul class="nav-dropdown nav-submenu">
							<li><a href="index.html">Home 1</a></li>
							<li><a href="home-2.html">Home 2</a></li>
							<li><a href="home-3.html">Home 3</a></li>
							<li><a href="home-4.html">Home 4</a></li>
							<li><a href="home-5.html">Home 5</a></li>
							<li><a href="home-6.html">Home 6</a></li>
							<li><a href="home-7.html">Home 7</a></li>
							<li><a href="home-8.html">Home 8</a></li>
						</ul> --}}
					</li>
					
					<li><a href="job-search">Find Job</a>
						{{-- <ul class="nav-dropdown nav-submenu">
							<li><a href="job-search-v1.html">Job Search V1</a></li>
							<li><a href="job-search-v2.html">Job Search V2</a></li>
							<li><a href="job-search-v3.html">Job Search V3</a></li>
							<li><a href="job-list-v1.html">Job Search V4</a></li>
							<li><a href="job-list-v2.html">Job Search V5</a></li>
							<li><a href="job-list-v3.html">Job Search V6</a></li>
							<li><a href="javascript:void(0);">Map Styles</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="job-half-map.html">Search On Map V1</a></li>
									<li><a href="job-half-map-v2.html">Search On Map V2</a></li>
									<li><a href="job-search-map-v1.html">Search On Map V3</a></li>
									<li><a href="job-search-map-v2.html">Search On Map V4</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0);">Single Job</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="single-job-1.html">Single Job V1</a></li>
									<li><a href="single-job-2.html">Single Job V2</a></li>
									<li><a href="single-job-3.html">Single Job V3</a></li>
									<li><a href="single-job-4.html">Single Job V4</a></li>
								</ul>
							</li>
						</ul> --}}
					</li>

					@if(session('jobberUser'))
					<li><a href="javascript:void(0);">Candidates</a>
						<ul class="nav-dropdown nav-submenu">
							{{-- <li><a href="browse-jobs.html">Browse Jobs</a></li>
							<li><a href="browse-resumes.html">Browse Resumes</a></li>
							<li><a href="browse-category.html">Browse Categories</a></li>
							<li><a href="candidate-detail.html">Candidate Detail</a></li> --}}
							<li><a href="jobber-dashboard-chk">Candidate Dashboard</a></li>
						</ul>
					</li>
					@endif
					{{-- <li><a href="javascript:void(0);">Admin</a>
						<ul class="nav-dropdown nav-submenu">
							<li><a href="browse-employers.html">Browse Employers V1</a></li>
							<li><a href="browse-employers-list.html">Browse Employers V2</a></li>
							<li><a href="employer-detail.html">Employer Detail</a></li>
							<li><a href="company-signin">Admin Dashboard</a></li>
						</ul>
					</li> --}}
					
					<li><a href="javascript:void(0);">Pages</a>
						<ul class="nav-dropdown nav-submenu">
							{{-- <li><a href="blog">Blog Style</a></li> --}}
							<li><a href="about-us">About Us</a></li>
							<li><a href="contact">Contact</a></li>
							<li><a href="privacy">Privacy Policy</a></li>
							<li><a href="faq">FAQs</a></li>
						</ul>
					</li>
					
				</ul>
				@endif
				
				<ul class="nav-menu nav-menu-social align-to-right">
					
					@if(session('jobberUser'))
					<li>
						<a href="jobber-logout">
						<i class="lni lni-user mr-2"></i>
						Logout
						</a>
					</li>
					@else
					<li>
						<a href="#" data-toggle="modal" data-target="#login" class="ft-medium">
							<i class="lni lni-user mr-2"></i>
							Signin
						</a>
					</li>
					@endif
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- End Navigation -->

