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
								<h1 class="ft-medium">My Profile</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" method="POST" action="company-profile-update">
                                            @csrf
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
												<div class="custom-file avater_uploads">
												  <input type="file" class="custom-file-input" id="customFile">
												  <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
												</div>
											</div>
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                                <input name="id" value="{{$data[0]['company_users_id']}}" hidden>
												<div class="row">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Name</label>
															<input name="fname" type="text" class="form-control rounded" value="{{$data[0]['fname']}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Last Name</label>
															<input name="lname" type="text" class="form-control rounded" value="{{$data[0]['lname']}}">
														</div>
													</div>
                                                    <div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Username</label>
															<input name="username" type="text" class="form-control rounded" value="{{$data[0]['username']}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Company Name</label>
															<input name="companyName" type="text" class="form-control rounded" value="{{$data[0]['companyName']}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Phone</label>
															<input name="phone" type="text" class="form-control rounded" value="{{$data[0]['phone']}}">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input name="email" type="email" class="form-control rounded" value="{{$data[0]['email']}}">
														</div>
													</div>
																																																				
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
														</div>
													</div>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
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
			document.getElementById("company-profile").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>