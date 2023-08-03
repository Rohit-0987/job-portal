<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Workplex - Creative Job Board HTML Template</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			{{-- <div class="header header-light dark-text head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
								<li>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-dark gray">
										<span class="embos_45"><i class="lni lni-power-switch mr-1 mr-1"></i>Logout</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="#">Home</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="home-2.html">Home 2</a></li>
										<li><a href="home-3.html">Home 3</a></li>
										<li><a href="home-4.html">Home 4</a></li>
										<li><a href="home-5.html">Home 5</a></li>
										<li><a href="home-6.html">Home 6</a></li>
										<li><a href="home-7.html">Home 7</a></li>
										<li><a href="home-8.html">Home 8</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Find Job</a>
									<ul class="nav-dropdown nav-submenu">
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
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Candidates</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="browse-jobs.html">Browse Jobs</a></li>
										<li><a href="browse-resumes.html">Browse Resumes</a></li>
										<li><a href="browse-category.html">Browse Categories</a></li>
										<li><a href="candidate-detail.html">Candidate Detail</a></li>
										<li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Employers</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="browse-employers.html">Browse Employers V1</a></li>
										<li><a href="browse-employers-list.html">Browse Employers V2</a></li>
										<li><a href="employer-detail.html">Employer Detail</a></li>
										<li><a href="employer-dashboard.html">Employer Dashboard</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Pages</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blog Style</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="privacy.html">Privacy Policy</a></li>
										<li><a href="faq.html">FAQs</a></li>
										<li><a href="docs.html">Docs</a></li>
									</ul>
								</li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li class="add-listing gray">
									<a href="dashboard-post-job.html" >
										<i class="lni lni-power-switch mr-1"></i> Logout
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div> --}}
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= dashboard Detail ======================== -->
			<div class="dashboard-wrap bg-light">
				@include('company-sidenav')
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Shortlisted Resume</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										{{-- <li class="breadcrumb-item text-muted"><a href="">Home</a></li> --}}
										<li class="breadcrumb-item text-muted"><a href="company-dashboard">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Shortlisted Resume</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					@if(session('error'))
						<div class="alert alert-warning" role="alert">
							{{ session('error') }}
						</div>
					@endif
					@if(session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							
								<div class="px-3 py-2 br-bottom br-top bg-white rounded mb-3">
									<div class="flixors">
										<div class="row align-items-center justify-content-between">
											<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
												<h6 class="mb-0 ft-medium fs-sm">07 Shortlisted Resume</h6>
											</div>
											
											<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
												<div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
													<div class="single_fitres mr-2">
														<select class="custom-select simple">
														  <option value="1" selected="">Default Sorting</option>
														  <option value="2">Short By Name</option>
														  <option value="3">Short By Rating</option>
														  <option value="4">Short By Trending</option>
														  <option value="5">Shot By Recent</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="data-responsive">
									
									<!-- Single List -->
									@foreach($data as $row)
									<div class="dashed-list-wrap bg-white rounded mb-3">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl"> {{$row->getJobber[0]->fname}} {{$row->getJobber[0]->lname}}</h4>
														<div class="d-block mb-2 position-relative">
															<span><i class="lni lni-map-marker mr-1"></i>{{$row->getJobs[0]->country}}</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i>{{$row->getJobs[0]->job_title}}</span>
														</div>
														<div class="ico-content">
															{{-- <ul>
																<li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
																<li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
															</ul> --}}
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="text-left">
													
													<a href="company-view-jobber-profile{{$row->getJobber[0]->candidate_id}}" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
													<a href="javascript:void(0);" class="p-2 text-info bg-gray-info d-inline-flex align-items-center justify-content-center mr-1">
													<form method="get" action="company-update-status{{$row->job_applications_id}}">
														<select name="status" class="rounded" style="padding: 0;">
															<option value="status">Status</option>
															<option {{$row->status == "Hired" ? "selected" : "" }} value="Hired">Hired</option>
															<option {{$row->status == "Pending" ? "selected" : "" }} value="Pending">Pending</option>
															<option {{$row->status == "Rejected" ? "selected" : "" }} value="Rejected">Rejected</option>
														</select>
														@if($row->status != "Rejected")
															<button type="submit" class="btn btn-md width-auto py-2 px-3 theme-bg text-light fs-sm ft-md" id="submit-button">Update</button>
														@endif
													</form>
													</a>
													@if($row->bookmark == false)
														<a href="company-bookmark-application{{$row->job_applications_id}}" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Bookmark</a>
													@else
														<a href="company-unbookmark-application{{$row->job_applications_id}}" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart-filled mr-1"></i>UnBookmark</a>
													@endif
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i>{{$row->getJobs[0]->created_at->format('d M Y')}}</span></li>
													<li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
												</ul>
											</div>
										</div>
									</div>
									@endforeach
									
									<!-- Single List -->
									{{-- <div class="dashed-list-wrap bg-white rounded mb-3">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl">Charles T. Gerena</h4>
														<div class="d-block mb-2 position-relative">
															<span><i class="lni lni-map-marker mr-1"></i>United States</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i>UI/UX Designer</span>
														</div>
														<div class="ico-content">
															<ul>
																<li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
																<li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="dash-action">
													<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
													<li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!-- Single List -->
									<div class="dashed-list-wrap bg-white rounded mb-3">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl">Julie D. Morales</h4>
														<div class="d-block mb-2 position-relative">
															<span><i class="lni lni-map-marker mr-1"></i>United States</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i>Web Designer</span>
														</div>
														<div class="ico-content">
															<ul>
																<li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
																<li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="dash-action">
													<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
													<li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!-- Single List -->
									<div class="dashed-list-wrap bg-white rounded mb-3">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl">Samantha D. Hebert</h4>
														<div class="d-block mb-2 position-relative">
															<span><i class="lni lni-map-marker mr-1"></i>United States</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i>PHP Developer</span>
														</div>
														<div class="ico-content">
															<ul>
																<li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
																<li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="dash-action">
													<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
													<li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!-- Single List -->
									<div class="dashed-list-wrap bg-white rounded">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl">Patricia B. North</h4>
														<div class="d-block mb-2 position-relative">
															<span><i class="lni lni-map-marker mr-1"></i>United States</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i>IOS Developer</span>
														</div>
														<div class="ico-content">
															<ul>
																<li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
																<li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="dash-action">
													<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></a>
													<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
													<li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
												</ul>
											</div>
										</div>
									</div> --}}
									
								</div>
							</div>
						</div>
							
					</div>
					
					<!-- footer -->
					<div style="margin-top: 15rem"></div>
					@include('footer')
		
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<!-- Message Modal -->
			<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="messagemodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Drop Your Message</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<textarea class="ht-200 form-control" placeholder="Type Your Message..."></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Send Message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		@include('scripts')
		<script>
			document.getElementById("company-bookmark-resume").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	
		

	</body>
</html>