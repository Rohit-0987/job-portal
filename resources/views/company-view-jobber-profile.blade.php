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
								<h1 class="ft-medium">Candidate Profile</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item text-muted"><a href="company-all-candidates">All Candidates</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Candidate Profile</a></li>
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
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>	
										</div>
									</div>
									<div class="_dashboard_content_body py-3 px-3">
										{{-- <form method="get" action="jobber-update-profile{{$data->candidate_id}}" class="row"> --}}
											{{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
												<div class="custom-file avater_uploads">
												  <input type="file" class="custom-file-input" id="customFile">
												  <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
												</div>
											</div> --}}
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
												<div class="row">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">First Name</label>
															<input name="fname" type="text" class="form-control rounded" value="{{$data->fname}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Last Name</label>
															<input name="lname" type="text" class="form-control rounded" value="{{$data->lname}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Username</label>
															<input name="username" type="text" class="form-control rounded" value="{{$data->username}}">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input name="email" type="email" class="form-control rounded" value="{{$data->email}}">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Experience</label>
															<select name="experience" class="custom-select rounded">
																<option>Select Experience</option>
																<option {{$data->experience == "0" ? "selected" : "" }} value="0">00 Year</option>
																<option {{$data->experience == "1" ? "selected" : "" }} value="1">01 Year</option>
																<option {{$data->experience == "2" ? "selected" : "" }} value="2">02 Years</option>
																<option {{$data->experience == "3" ? "selected" : "" }} value="3">03 Years</option>
																<option {{$data->experience == "4" ? "selected" : "" }} value="4">04 Years</option>
																<option {{$data->experience == "5" ? "selected" : "" }} value="5">05 Years</option>
															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Expected Salary</label>
															<select name="exp_salary" class="custom-select rounded">
																<option {{$data->experience == "10-20" ? "selected" : "" }}  value="10-20">10-20 K</option>
																<option {{$data->experience == "20-30" ? "selected" : "" }}  value="20-30">20-30 K</option>
																<option {{$data->experience == "30-40" ? "selected" : "" }}  value="30-40">30-40 K</option>
																<option {{$data->experience == "40-50" ? "selected" : "" }}  value="40-50">40-50 K</option>
															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Education</label>
															<input name="education" type="text" class="form-control rounded" value="{{$data->education}}">
														</div>
													</div>
													
													
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Phone</label>
															<input name="phone" type="number" class="form-control rounded" value="{{$data->phone}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Age</label>
															<input name="age" type="number" min="0" class="form-control rounded" value="{{$data->age}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Language</label>
															<input name="language" type="text" class="form-control rounded" value="{{$data->language}}">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">About Info</label>
															<textarea name="about_info" class="form-control with-light">{{$data->about_info}}</textarea>
														</div>
													</div>
													
													{{-- <div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
														</div>
													</div> --}}
												</div>
											</div>
											
										{{-- </form> --}}
									</div>
								</div>
							</div>
						</div>
						
						{{-- <div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="ti-facebook mr-1 theme-cl fs-sm"></i>Social Accounts</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label class="text-dark ft-medium">Facebook</label>
													<input type="text" class="form-control rounded" placeholder="https://www.facebook.com/">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label class="text-dark ft-medium">Twitter</label>
													<input type="text" class="form-control rounded" placeholder="https://www.twitter.com/">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label class="text-dark ft-medium">LinkedIn</label>
													<input type="text" class="form-control rounded" placeholder="https://www.linkedin.com/">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label class="text-dark ft-medium">GooglePlus</label>
													<input type="text" class="form-control rounded" placeholder="https://www.gplus.com/">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12">
												<div class="form-group">
													<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-lock mr-1 theme-cl fs-sm"></i>Contact Information</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">	
											<div class="col-xl-6 col-lg-6 col-md-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Country</label>
													<select class="custom-select rounded">
														<option>Australia</option>
														<option>United States</option>
														<option>United Kingdom</option>
														<option>China</option>
														<option>India</option>
														<option>Pakistan</option>
													</select>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12">
												<div class="form-group">
													<label class="text-dark ft-medium">City</label>
													<select class="custom-select rounded">
														<option>Madhya Pradesh</option>
														<option>Punjab</option>
														<option>Uttar Pradesh</option>
														<option>Arudachal</option>
														<option>Nepal</option>
														<option>Afganistan</option>
													</select>
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Full Address</label>
													<input type="password" class="form-control rounded" placeholder="#10 Marke Juger, SBI Road">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Latitude</label>
													<input type="password" class="form-control rounded" placeholder="#10 Marke Juger, SBI Road">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Longitude</label>
													<input type="password" class="form-control rounded" placeholder="#10 Marke Juger, SBI Road">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12">
												<div class="form-group">
													<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>	
						</div>	 --}}
							
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
						</div>
					</div>
		
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
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>