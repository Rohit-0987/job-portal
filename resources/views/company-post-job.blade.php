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
			{{-- @include('start-navigation') --}}
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
								<h1 class="ft-medium">Post A New Job</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Post Job</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
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
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Post Job</h4>	
										</div>
									</div>
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" action="insert-job-post" method="POST" enctype="multipart/form-data">
											@csrf
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="row">
												
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Title</label>
															<input name="job_title" type="text" class="form-control rounded" placeholder="Title">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Image</label>
															<input name="job_img" type="file" class="form-control rounded" placeholder="Image">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Description</label>
															<textarea name="job_description" class="form-control rounded" placeholder="Job Description"></textarea>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Requirements</label>
															<input name="job_requirement1" class="form-control rounded" placeholder="Job Requirement 1">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement2" class="form-control rounded" placeholder="Job Requirement 2">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement3" class="form-control rounded" placeholder="Job Requirement 3">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement4" class="form-control rounded" placeholder="Job Requirement 4">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement5" class="form-control rounded" placeholder="Job Requirement 5">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement6" class="form-control rounded" placeholder="Job Requirement 6">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement7" class="form-control rounded" placeholder="Job Requirement 7">
														</div>
													</div><div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement8" class="form-control rounded" placeholder="Job Requirement 8">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Key Skills</label>
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill1" class="form-control rounded" placeholder="Skill 1">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill2" class="form-control rounded" placeholder="Skill 2">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill3" class="form-control rounded" placeholder="Skill 3">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill4" class="form-control rounded" placeholder="Skill 4">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill5" class="form-control rounded" placeholder="Skill 5">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill6" class="form-control rounded" placeholder="Skill 6">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill7" class="form-control rounded" placeholder="Skill 7">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill8" class="form-control rounded" placeholder="Skill 8">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill9" class="form-control rounded" placeholder="Skill 9">
														</div>
													</div>
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill10" class="form-control rounded" placeholder="Skill 10">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 my-auto text-warning">
														<div class="form-group">
															-Empty skills will not be inserted
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Working Type</label>
															<select name="working_type" class="form-control rounded">
																<option>Select Working Type</option>
																<option value="R">Remote</option>
																<option value="O">Office</option>
																<option value="H">Hybrid</option>
															</select>
														</div>
													</div>
												{{-- insert remote checkbox	 --}}									
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Category</label>
															<select name="industry" class="form-control rounded">
																<option value="Web Developer">Web Developer</option>
																<option value="App Developer">App Developer</option>
																<option value="Software Developer">Software Developer</option>
																<option value="Cloud Computing">Cloud Computing</option>
																<option value="React Developer">React Developer</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Type</label>
															<select name="job_type" class="form-control rounded">
																<option value="fulltime">Full Time</option>
																<option value="parttime">Part Time</option>
																<option value="internship">Internship</option>
																<option value="contract">Contract</option>
																<option value="freelancing">Freelancing</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Career Level</label>
															<select name="carrer_level" class="form-control rounded">
																<option value="begginer">Begginer</option>
																<option value="junior">Junior</option>
																<option value="manager">Manager</option>
																<option value="teamleader">Team leader</option>
															</select>
														</div>
													</div>
													
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Experience</label>
															<select name="experience" class="form-control rounded">
																<option value="begginer">Begginer</option>
																<option value="1">1 Years</option>
																<option value="2">2 Years</option>
																<option value="3">3 Years</option>
																<option value="4">4 Years</option>
																<option value="5">5+ Years</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Qualification</label>
															<select name="qualification" class="form-control rounded">
																<option value="graduation">Graduation</option>
																<option value="master">Master Degree</option>
																<option value="bpharm">BPharma</option>
																<option value="phd">P.H.D.</option>
																<option                                                                                                                                                                                                       value="other">Other</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Gender</label>
															<select name="gender" class="form-control rounded">
																<option value="A">Any</option>
																<option value="M">Male</option>
																<option value="F">Female</option>
																<option value="O">Other</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Application Deadline</label>
															<input name="deadline" type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Country</label>
															<input name="country" type="text" class="form-control" placeholder="Country" />
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">City</label>
															<input name="city" type="text" class="form-control" placeholder="City" />
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Address</label>
															<input name="address" type="text" class="form-control" placeholder="#10 Marke Juger, SBI Road" />
														</div>
													</div>
																				
													<div class="col-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Publish Job</button>
														</div>
													</div>
													
												</div>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
	
					</div>
					
					<!-- footer -->
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
			document.getElementById("company-post-job").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>