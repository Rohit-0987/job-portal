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
			@include('start-navigation')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- Start Alert sessions -->
			@if(session('status'))
			<div class="alert alert-success m-0" role="alert">
				<div class="container">
					{{ session('status') }}
				</div>
			</div>
			@endif

			@if(session('error'))
			<div class="alert alert-warning m-0" role="alert">
				<div class="container">
					{{ session('error') }}
				</div>
			</div>
			@endif

			@if(session('jobApplied'))
			<div class="alert alert-success m-0" role="alert">
				<div class="container">
					{{ session('jobApplied') }}
				</div>
			</div>
			@endif
			<!-- End Alert sessions -->
			<!-- ======================= Searchbar Banner ======================== -->
			<div class="py-5" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;" data-overlay="0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
							<div class="banner_caption text-center mb-2">
								<h1 class="ft-bold mb-4">The Most Exciting Jobs</h1>
							</div>
							
							<form class="bg-white rounded p-1">
								<div class="row no-gutters">
									<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
											<i class="bnc-ico lni lni-search-alt"></i>
										</div>
									</div>
									<div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
											<i class="bnc-ico lni lni-target"></i>
										</div>
									</div>
									<div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ======================= Searchbar Banner ======================== -->	
			
			<!-- ============================ Job Details Start ================================== -->
			<section class="bg-light py-5 position-relative">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-auto">
							<div class="bg-white rounded px-3 py-4 mb-4">
								<div class="jbd-01 d-flex align-items-center justify-content-between">
									<div class="jbd-flex d-flex align-items-center justify-content-start">
										<div class="jbd-01-thumb">
											<img src="job-profile-img/{{$job->job_img}}" class="img-fluid rounded" width="90" alt="" />
										</div>
										<div class="jbd-01-caption pl-3">
											<div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{$job->carrer_level}} {{$job->job_title}} in {{$job->country}}</h4></div>
											<div class="jbl_location mb-3">
												<span><i class="lni lni-map-marker mr-1"></i>{{$job->city}}, {{$job->country}}</span>
												<span class="medium ft-medium text-warning ml-3">{{$job->job_type}}</span>
												<span class="medium ft-medium text-warning ml-3">
													@if($job->working_type == "R")
														Remote
													@endif
													@if($job->working_type == "O")
														Office
													@endif
													@if($job->working_type == "H")
														Hybrid
													@endif
												</span>
											</div>
											{{-- <div class="jbl_info01">
												<span class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">Magento</span>
												<span class="px-2 py-1 ft-medium medium rounded text-danger bg-light-danger mr-2">WordPress</span>
												<span class="px-2 py-1 ft-medium medium rounded text-purple bg-light-purple">Laravel</span>												
											</div> --}}
										</div>
									</div>
									<div class="jbd-01-right text-right hide-1023">
										<div class="jbl_button mb-2">
											@if($job->applied)
												<a class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Applied</a>
											@else
												<a href="job-apply{{$job->jobs_id}}" class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Apply This Job</a>
											@endif
										</div>
										{{-- <div class="jbl_button"><a href="javascript:void(0);" class="btn rounded bg-white border fs-sm ft-medium">View Company</a></div> --}}
									</div>
								</div>
							</div>
							
							<div class="bg-white rounded mb-4">
								<div class="jbd-01 px-3 py-4">
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>
										<p>{{$job->job_description}}</p>
									</div>

									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Basic Information</h5>
										<div class="other-details">
											<div class="details ft-medium"><label class="text-muted">Role</label><span class="text-dark">{{$job->job_title}}</span></div>
											<div class="details ft-medium"><label class="text-muted">Carrer Level</label><span class="text-dark">{{$job->carrer_level}}</span></div>
											<div class="details ft-medium"><label class="text-muted">Experience</label><span class="text-dark">{{$job->experience}}</span></div>
											<div class="details ft-medium"><label class="text-muted">Qualification</label><span class="text-dark">{{$job->qualification}}</span></div>
											<div class="details ft-medium"><label class="text-muted">Apply Before</label><span class="text-dark">{{$job->deadline}}</span></div>
										</div>
									</div>
									
									<div class="jbd-details mb-3">
										<h5>Requirements:</h5>
										<div class="position-relative row">
											<div class="col-lg-12 col-md-12 col-12">
												@foreach($job->getJobRequirements as $req)
													<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
														<div class="d-flex align-items-center">
														<div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
															<i class="fas fa-check small"></i>
														</div>
														<h6 class="mb-0 ml-3 text-muted fs-sm">{{$req->requirement}}</h6>
														</div>
													</div>
												@endforeach
											</div>
										</div>
									</div>
									
									{{-- <div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Skills Required</h5>
										<div class="other-details">
											<div class="details ft-medium"><label class="text-muted">Role</label><span class="text-dark">Database Architect / Designer</span></div>
											<div class="details ft-medium"><label class="text-muted">Industry Type</label><span class="text-dark">Advertising & Marketing</span></div>
											<div class="details ft-medium"><label class="text-muted">Functional Area</label><span class="text-dark">Engineering - Software</span></div>
											<div class="details ft-medium"><label class="text-muted">Employment Type</label><span class="text-dark">Full Time, Permanent</span></div>
											<div class="details ft-medium"><label class="text-muted">Role Category</label><span class="text-dark">DBA / Data warehousing</span></div>
										</div>
									</div> --}}
									<!-- Key skills Section -->
									<div class="jbd-details mb-1">
										<h5 class="ft-medium fs-md">Key Skills</h5>
										<ul class="p-0 skills_tag text-left">
											@foreach($job->getJobSkills as $skill)
												<li><span class="px-2 py-1 medium skill-bg rounded text-dark">{{$skill->skill}}</span></li>
											@endforeach
										</ul>
									</div>
									
								</div>
								
								<div class="jbd-02 px-3 py-3 br-top">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbd-02-social">
											<ul class="jbd-social">
												<li><i class="ti-sharethis"></i></li>
												<li><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-twitter"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
											</ul>
										</div>
										<div class="jbd-02-aply">
											<div class="jbl_button mb-2">
												{{-- <a href="#" class="btn btn-md rounded gray fs-sm ft-medium mr-2">Save This Job</a> --}}
												@if($job->applied)
													<a class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Applied</a>
												@else
													<a href="job-apply{{$job->jobs_id}}" class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Apply Job</a>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
						<!-- Sidebar -->
						{{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
								<h4 class="ft-medium fs-md mb-3">Intrested in this job?</h4>
								
								<form class="_apply_form_form">
								
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">First Name</label>
										<input type="text" class="form-control" placeholder="First Name">
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Your Email</label>
										<input type="email" class="form-control" placeholder="themezhub@gmail.com">
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Phone Number:</label>
										<input type="text" class="form-control" placeholder="+91 245 256 2548">
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Upload Resume:<font>pdf, doc, docx</font></label>
										<div class="custom-file">
										  <input type="file" class="custom-file-input" id="customFile">
										  <label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
									
									<div class="form-group">
										<div class="terms_con">
											<input id="aa3" class="checkbox-custom" name="Coffee" type="checkbox">
											<label for="aa3" class="checkbox-custom-label">I agree to pirvacy policy</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-md rounded theme-bg text-light ft-medium fs-sm full-width">Apply For This Job</button>
									</div>
									
								</form>
							</div>
						</div> --}}
						
					</div>
				</div>
			</section>
			<!-- ============================ Job Details End ================================== -->
			
			<!-- ======================= Related Jobs ======================== -->
			<section class="space min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-muted mb-0">Related Jobs</h6>
								<h2 class="ft-bold">All Related Listed jobs</h2>
							</div>
						</div>
					</div>
					
					<!-- row -->
					<div class="row align-items-center">
					
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="job_grid border rounded ">
								<div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
								<div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
								<div class="job_grid_thumb mb-3 pt-5 px-3">
									<a href="job-detail.html" class="d-block text-center m-auto"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="70" alt="" /></a>
								</div>
								<div class="job_grid_caption text-center pb-5 px-3">
									<h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
									<h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
									<div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
								</div>
								<div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
									<div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
									<div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="job_grid border rounded ">
								<div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
								<div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>
								<div class="job_grid_thumb mb-3 pt-5 px-3">
									<a href="job-detail.html" class="d-block text-center m-auto"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="70" alt="" /></a>
								</div>
								<div class="job_grid_caption text-center pb-5 px-3">
									<h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
									<h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
									<div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
								</div>
								<div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
									<div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
									<div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="job_grid border rounded ">
								<div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
								<div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
								<div class="job_grid_thumb mb-3 pt-5 px-3">
									<a href="job-detail.html" class="d-block text-center m-auto"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="70" alt="" /></a>
								</div>
								<div class="job_grid_caption text-center pb-5 px-3">
									<h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
									<h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
									<div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
								</div>
								<div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
									<div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
									<div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="job_grid border rounded ">
								<div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
								<div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
								<div class="job_grid_thumb mb-3 pt-5 px-3">
									<a href="job-detail.html" class="d-block text-center m-auto"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="70" alt="" /></a>
								</div>
								<div class="job_grid_caption text-center pb-5 px-3">
									<h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
									<h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
									<div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
								</div>
								<div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
									<div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
									<div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- row -->
					
				</div>
			</section>
			<!-- ======================= Related Jobs ======================== -->
			
			<!-- ======================= Newsletter Start ============================ -->
			<section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
				<div class="container py-5">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-light mb-0">Subscribr Now</h6>
								<h2 class="ft-bold text-light">Get All New Job Notification</h2>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
							<form class="bg-white rounded p-1">
								<div class="row no-gutters">
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
										<div class="form-group mb-0 position-relative">
											<input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
											<i class="bnc-ico lni lni-envelope"></i>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
										<div class="form-group mb-0 position-relative">
											<button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="button">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Newsletter Start ============================ -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="light-footer skin-light-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
								<div class="footer_widget">
									<img src="assets/img/logo.png" class="img-footer small mb-2" alt="" />
									
									<div class="address mt-2">
										3298 Grant Street Longview, New Texox<br>United Kingdom 75601	
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>support@workplex.com
									</div>
									<div class="address mt-2">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">For Employers</h4>
									<ul class="footer-menu">
										<li><a href="#">Explore Candidates</a></li>
										<li><a href="#">Job Pricing</a></li>
										<li><a href="#">Submit Job</a></li>
										<li><a href="#">Shortlisted</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">For Candidates</h4>
									<ul class="footer-menu">
										<li><a href="#">Explore All Jobs</a></li>
										<li><a href="#">Browse Categories</a></li>
										<li><a href="#">Saved Jobs</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>
					
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">About Company</h4>
									<ul class="footer-menu">
										<li><a href="#">Who We'r?</a></li>
										<li><a href="#">Our Mission</a></li>
										<li><a href="#">Our team</a></li>
										<li><a href="#">Packages</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Helpful Topics</h4>
									<ul class="footer-menu">
										<li><a href="#">Site Map</a></li>
										<li><a href="#">Security</a></li>
										<li><a href="#">Contact</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				
				<div class="footer-bottom br-top">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">� 2022 Workplex. Designd By <a href="https://themezhub.com">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			@include('jobber-login-modal')

			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/snackbar.min.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>