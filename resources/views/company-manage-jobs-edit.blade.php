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
										<li class="breadcrumb-item text-muted"><a href="/company-dashboard">Dashboard</a></li>
										<li class="breadcrumb-item text-muted"><a href="/company-manage-jobs">Manage Job Applications</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Edit Job</a></li>
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
										<form class="row" action="company-job-update" method="POST" enctype="multipart/form-data">
											@csrf
                                            <input value="{{$data->jobs_id}}" name="jobs_id" hidden>
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="row">
												
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Title</label>
															<input name="job_title" value="{{$data->job_title}}" type="text" class="form-control rounded" placeholder="Title">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Image</label>
															<input name="job_img" value="{{$data->job_img}}" type="file" class="form-control rounded" placeholder="Image">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Description</label>
															<textarea name="job_description" class="form-control rounded" placeholder="Job Description">{{$data->job_description}}</textarea>
														</div>
													</div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Requirements</label>
														</div>
													</div>
                                                    @foreach($data->getJobRequirements as $key => $req)
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement{{++$key}}" value="{{$req->requirement}}" class="form-control rounded" placeholder="Job Requirement {{$key}}">
														</div>
													</div>
                                                    @endforeach
                                                    @for($i = $key + 1; $i <= 8; $i++)
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<input name="job_requirement{{$i}}" value="" class="form-control rounded" placeholder="Job Requirement {{$i}}">
														</div>
													</div>
                                                    @endfor
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Key Skills</label>
														</div>
													</div>
                                                    @foreach($data->getJobSkills as $key => $skill)
													<div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill{{++$key}}" value="{{$skill->skill}}" class="form-control rounded" placeholder="Skill {{$key}}">
														</div>
													</div>
                                                    @endforeach
													@for($i = $key + 1; $i <= 10; $i++)
                                                    <div class="col-xl-3 col-lg-3 col-md-3">
														<div class="form-group">
															<input name="job_key_skill{{$i}}" value="" class="form-control rounded" placeholder="Skill {{$i}}">
														</div>
													</div>
                                                    @endfor
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
                                                                @if($data->working_type == "R")
																    <option selected value="R">Remote</option>
                                                                @else 
																    <option value="R">Remote</option>
                                                                @endif
                                                                
                                                                @if($data->working_type == "O")
                                                                    <option selected value="O">Office</option>
                                                                @else 
                                                                    <option value="O">Office</option>
                                                                @endif

                                                                @if($data->working_type == "H")
                                                                    <option selected value="H">Hybrid</option>
                                                                @else 
                                                                    <option value="H">Hybrid</option>
                                                                @endif
															</select>
														</div>
													</div>
												{{-- insert remote checkbox	 --}}									
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Industry</label>
															<select name="industry" class="form-control rounded">
																<option {{$data->industry == "Web Developer" ? "selected" : "" }} value="Web Developer">Web Developer</option>
																<option {{$data->industry == "App Developer" ? "selected" : "" }} value="App Developer">App Developer</option>
																<option {{$data->industry == "Software Developer" ? "selected" : "" }} value="Software Developer">Software Developer</option>
																<option {{$data->industry == "Cloud Computing" ? "selected" : "" }} value="Cloud Computing">Cloud Computing</option>
																<option {{$data->industry == "React Developer" ? "selected" : "" }} value="React Developer">React Developer</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
                                                            
															<label class="text-dark ft-medium">Job Type</label>
															<select name="job_type" class="form-control rounded">
																<option {{$data->job_type == "fulltime" ? "selected" : "" }} value="fulltime">Full Time</option>
																<option {{$data->job_type == "Part time" ? "selected" : ""}} value="parttime">Part Time</option>
																<option {{$data->job_type == "internship" ? "selected" : "" }} value="internship">Internship</option>
																<option {{$data->job_type == "contract" ? "selected" : "" }}  value="contract">Contract</option>
																<option {{$data->job_type == "freelancing" ? "selected" : "" }}  value="freelancing">Freelancing</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Career Level</label>
															<select name="carrer_level" class="form-control rounded">
																<option {{$data->carrer_level == "begginer" ? "selected" : "" }}  value="begginer">Begginer</option>
																<option {{$data->carrer_level == "Junior" ? "selected" : "" }} value="junior">Junior</option>
																<option {{$data->carrer_level == "manager" ? "selected" : "" }} value="manager">Manager</option>
																<option {{$data->carrer_level == "teamleader" ? "selected" : "" }} value="teamleader">Team leader</option>
															</select>
														</div>
													</div>
													
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Experience</label>
															<select name="experience" class="form-control rounded">
																<option {{$data->experience == "begginer" ? "selected" : "" }} value="begginer">Begginer</option>
																<option {{$data->experience == "1" ? "selected" : "" }} value="1">1 Years</option>
																<option {{$data->experience == "2" ? "selected" : "" }} value="2">2 Years</option>
																<option {{$data->experience == "3" ? "selected" : "" }} value="3">3 Years</option>
																<option {{$data->experience == "4" ? "selected" : "" }} value="4">4 Years</option>
																<option {{$data->experience == "5" ? "selected" : "" }} value="5">5+ Years</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Qualification</label>
															<select name="qualification" class="form-control rounded">
																<option {{$data->qualification == "graduation" ? "selected" : "" }} value="graduation">Graduation</option>
																<option {{$data->qualification == "master" ? "selected" : "" }} value="master">Master Degree</option>
																<option {{$data->qualification == "bpharm" ? "selected" : "" }} value="bpharm">BPharma</option>
																<option {{$data->qualification == "phd" ? "selected" : "" }} value="phd">P.H.D.</option>
																<option {{$data->qualification == "other" ? "selected" : "" }} value="other">Other</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Gender</label>
															<select name="gender" class="form-control rounded">
																<option {{$data->gender == "A" ? "selected" : "" }} value="A">Any</option>
																<option {{$data->gender == "M" ? "selected" : "" }} value="M">Male</option>
																<option {{$data->gender == "F" ? "selected" : "" }} value="F">Female</option>
																<option {{$data->gender == "O" ? "selected" : "" }} value="O">Other</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Application Deadline</label>
															<input name="deadline" value="{{$data->deadline}}" type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Country</label>
															<input name="country" value="{{$data->country}}" type="text" class="form-control" placeholder="Country" />
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">City</label>
															<input name="city" value="{{$data->city}}" type="text" class="form-control" placeholder="City" />
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Address</label>
															<input name="address" value="{{$data->address}}" type="text" class="form-control" placeholder="#10 Marke Juger, SBI Road" />
														</div>
													</div>
																				
													<div class="col-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Update Job</button>
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
			document.getElementById("company-manage-jobs").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>