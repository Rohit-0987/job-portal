<!DOCTYPE html>
<html lang="zxx">
	<head>
		@include('links')
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
				@include('jobber-sidenav')
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Saved Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="jobber-bookmarks" class="theme-cl">Saved Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-md-12 col-sm-12">
								<div class="cl-justify">
									
									<div class="cl-justify-first">
										<p class="m-0 p-0 ft-sm">You have bookmarked <span class="text-dark ft-medium">{{$data->count()}}</span> jobs</p>
									</div>
									
									<div class="cl-justify-last">
										<div class="d-flex align-items-center justify-content-left">
											<div class="dlc-list">
												<select class="form-control sm rounded">
													<option>All Jobs</option>
													<option>Full Time</option>
													<option>Part Time</option>
													<option>Freelancing</option>
													<option>Internship</option>
													<option>Contract</option>
												</select>
											</div>
											<div class="dlc-list ml-2">
												<select class="form-control sm rounded">
													<option>Show 20</option>
													<option>Show 30</option>
													<option>Show 40</option>
													<option>Show 50</option>
													<option>Show 100</option>
													<option>Show 250</option>
												</select>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Job Title</th>
												  <th scope="col">Status</th>
												  <th scope="col">Applied Date</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data as $row)
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="job-profile-img/{{$row->getJobApplications->getJobs[0]->job_img}}" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">{{$row->getJobApplications->getJobs[0]->job_title}}</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>{{$row->getJobApplications->getJobs[0]->city}}, {{$row->getJobApplications->getJobs[0]->country}}</span>
																	<span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>{{$row->getJobApplications->getJobs[0]->job_type}}</span>
																</div>
															</div>
														</div>
													</td>
													<td>
														@if($row->getJobApplications->status == "Hired")
															<span class="medium theme-cl rounded text-light bg-success ml-1 py-1 px-2">{{$row->getJobApplications->status}}</span>
														@elseif($row->status == "Pending")
															<span class="medium theme-cl rounded text-light bg-info ml-1 py-1 px-2">{{$row->getJobApplications->status}}</span>
														@else
															<span class="medium theme-cl rounded text-light bg-danger ml-1 py-1 px-2">{{$row->getJobApplications->status}}</span>
														@endif
													</td>
													<td>{{$row->getJobApplications->getJobs[0]->created_at->format('d M Y')}}</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-2"><i class="lni lni-eye"></i></a>
															<a href="jobber-unbookmark{{$row->getJobApplications->job_applications_id}}" class="p-2 circle text-warning bg-light-warning d-inline-flex align-items-center justify-content-center mr-2"><i class="lni lni-heart-filled"></i></a>
														</div>
													</td>
												</tr>
												@endforeach
												{{-- <tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>10 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr> --}}
												{{-- <tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Advance Magento Developer</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>18 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Senior IOS App Developer</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>07 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Senior Product Designer</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 text-warning"><i class="lni lni-briefcase mr-1"></i>Part Time</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>21 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Basic WordPress Developer</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>10 Oct 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium">Technical Content Writer</h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool, London</span>
																	<span class="muted medium ml-2 text-danger"><i class="lni lni-briefcase mr-1"></i>Internship</span>
																</div>
															</div>
														</div>
													</td>
													<td><span class="text-info">Active</span></td>
													<td>15 Oct 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr> --}}
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
						{{-- <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pagination">
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Previous">
										<span class="fas fa-arrow-circle-right"></span>
										<span class="sr-only">Previous</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item active"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">18</a></li>
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Next">
										<span class="fas fa-arrow-circle-right"></span>
										<span class="sr-only">Next</span>
									  </a>
									</li>
								</ul>
							</div>
						</div> --}}
							
					</div>
					
					<!-- footer -->
					<div style="margin-bottom: 20rem"></div>
					@include('footer')
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
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
			document.getElementById("jobber-bookmarks").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>