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
				@include('jobber-sidenav')
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Manage Resumes</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Resumes</a></li>
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
					{{-- Comented part orignal manage resume 
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Full Name</th>
												  <th scope="col">Job Title</th>
												  <th scope="col">Location</th>
												  <th scope="col">Posted Date</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">John K. Surber</h4></div></td>
													<td><span class="ft-medium">UI/UX Designer</span></td>
													<td>California, USA</td>
													<td>12 Nov 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Loretta E. Reyes</h4></div></td>
													<td><span class="ft-medium">PHP Developer</span></td>
													<td>Liverpool, CA</td>
													<td>12 Dec 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Adam B. Johnston</h4></div></td>
													<td><span class="ft-medium">IOS Developer</span></td>
													<td>Mailbourn, AU</td>
													<td>20 Nov 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Jessica G. Leininger</h4></div></td>
													<td><span class="ft-medium">Content Writer</span></td>
													<td>Denver, USA</td>
													<td>20 Dec 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Julie D. Morales</h4></div></td>
													<td><span class="ft-medium">Product Designer</span></td>
													<td>London, UK</td>
													<td>12 Jan 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Samantha D. Hebert</h4></div></td>
													<td><span class="ft-medium">UI/UX Designer</span></td>
													<td>California</td>
													<td>22 Dec 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
							
					</div> --}}
					<form action="jobber-update-resume" method="GET">
						<input name="resume_id" value="{{$data[0]->resume_id}}" hidden>
						<div class="dashboard-widg-bar d-block">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Create Resume</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
											<div class="row">
												{{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
													<div class="custom-file avater_uploads">
														<input type="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
													</div>
												</div> --}}
												
												<div id="profile" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
													<div class="row">
														<div class="col-xl-6 col-lg-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Your Name</label>
																<input name="name" type="text" class="form-control rounded" placeholder="Full Name" value="{{$data[0]->name}}">
															</div>
														</div>
														<div class="col-xl-6 col-lg-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Professional Title</label>
																<input name="professional_title" type="text" class="form-control rounded" placeholder="e.g. Web Designer"  value="{{$data[0]->professional_title}}">
															</div>
														</div>
														<div class="col-xl-6 col-lg-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Job category</label>
																<select name="job_category" class="form-control rounded">
																	<option {{$data[0]->job_category == "IT Services" ? "selected" : "" }} value="IT Services">IT Services</option>
																	<option {{$data[0]->job_category == "Hospital" ? "selected" : "" }} value="Hospital">Hospital</option>
																	<option {{$data[0]->job_category == "Banking" ? "selected" : "" }} value="Banking">Banking</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Email</label>
																<input name="email" type="email" class="form-control rounded" value="uppcl@gmail.com" value="{{$data[0]->email}}">
															</div>
														</div>
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<label class="text-dark ft-medium">Resume Content</label>
																<textarea name="resume_content" class="form-control with-light" placeholder="Resume Content">{{$data[0]->resume_content}}</textarea>
															</div>
														</div>
													</div>
												</div>
												
												{{-- <div id="subprofile" class="mx-auto">
													<div class="form-group">
														<button type="button" onclick="disableprofile()" class="mx-auto btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Profile</button>
													</div>
												</div> --}}
												<div id="afterprofile" class="mx-auto" style="display: none">
													<i class="fa fa-check fa-10x text-success"></i> <br>
													<span> Added Successfully </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script>
								function disableprofile() {
									document.getElementById('profile').style.display = "none";
									document.getElementById('subprofile').style.display = "none";
									document.getElementById('afterprofile').style.display = "block";
									count++;check(count);
									
								}
							</script>

							
							<!-- Add Education -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Education Details</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
											<div id="education" class="row">
												@foreach($data[0]->getEducation as $i => $edu)
												<?php $i += 1?>
												<div class="col-xl-4 col-lg-4">
													<div class="gray rounded p-3 mb-3 position-relative">
														<button class="aps-clone">{{$i}}</button>
														<div class="form-group">
															<label class="text-dark ft-medium">School Name {{$i}}</label>
															<input name="school_name{{$i}}" type="text" class="form-control rounded" placeholder="School Name" value="{{$edu->school_name}}">
														</div>
														<div class="form-group">
															<label class="text-dark ft-medium">Qualification</label>
															<input name="qualification{{$i}}" type="text" class="form-control rounded" placeholder="Qualification Title" value="{{$edu->qualification}}">
														</div>
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Start Date</label>
																	<input name="start_date{{$i}}" type="date" class="form-control rounded" placeholder="dd-mm-yyyy" value="{{$edu->start_date}}">
																</div>
															</div>
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">End Date</label>
																	<input name="end_date{{$i}}" type="date" class="form-control rounded" placeholder="dd-mm-yyyy" value="{{$edu->end_date}}">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="text-dark ft-medium">Note</label>
															<textarea name="edunote{{$i}}" class="form-control ht-80" placeholder="Note Optional">{{$edu->note}}</textarea>
														</div>
													</div>
												</div>
												@endforeach
												
												{{-- <div class="mx-auto">
													<div class="form-group">
														<button type="button" onclick="disableeducation()" class="mx-auto btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Education</button>
													</div>
												</div> --}}
												
											</div>
											
											<div id="aftereducation" class="col mx-auto p-auto" style="display: none">
												<i class="fa fa-check fa-10x text-success"></i> <br>
												<span> Added Successfully </span>
											</div>
											
										</div>
									</div>
								</div>	
							</div>	
							<script>
								function disableeducation() {
									document.getElementById('education').style.display = "none";
									document.getElementById('aftereducation').style.display = "block";
									count++;check(count);
								}
							</script>
							
							<!-- Add Experience -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Experience Details</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
											<div id="experience" class="row">
												@foreach($data[0]->getExperience as $i => $exp)
												<?php $i += 1?>
												<div class="col-xl-4 col-md-4">
													<div class="gray rounded p-3 mb-3 position-relative">
														<button class="aps-clone">{{$i}}</button>
														<div class="form-group">
															<label class="text-dark ft-medium">Job Title {{$i}}</label>
															<input name="job_title{{$i}}" type="text" class="form-control rounded" placeholder="Job Title" value="{{$exp->job_title}}">
														</div>
														<div class="form-group" >
															<label class="text-dark ft-medium">Designation</label>
															<input name="designation{{$i}}" type="text" class="form-control rounded" placeholder="Designation Name" value="{{$exp->designation}}">
														</div>
														
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Start Date</label>
																	<input name="expstartdate{{$i}}" type="date" class="form-control rounded" placeholder="dd-mm-yyyy" value="{{$exp->start_date}}">
																</div>
															</div>
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">End Date</label>
																	<input name="expenddate{{$i}}" type="date" class="form-control rounded" placeholder="dd-mm-yyyy" value="{{$exp->end_date}}">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="text-dark ft-medium">Note</label>
															<textarea name="expnote{{$i}}" class="form-control ht-80" placeholder="Note Optional">{{$exp->note}}</textarea>
														</div>
													</div>
												</div>
												@endforeach
												{{-- <div class="col-xl-12 col-lg-12">
													<div class="form-group">
														<button type="button" onclick="disableexp()" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Experience</button>
													</div>
												</div> --}}
												
											</div>
											<div id="afterexperience" class="col mx-auto p-auto" style="display: none">
												<i class="fa fa-check fa-10x text-success"></i> <br>
												<span> Added Successfully </span>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<script>
								function disableexp() {
									document.getElementById('experience').style.display = "none";
									document.getElementById('afterexperience').style.display = "block";
									count++;check(count);
								}
							</script>
							<!-- Add Skills -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Skills Details</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
											<div id="skill" class="row">
												@foreach($data[0]->getSkills as $i => $skl)
												<?php $i += 1?>
													<div class="col-xl-4 col-md-4">
														<div class="gray rounded p-3 mb-3 position-relative">
															<button class="aps-clone">{{$i}}</button>
															<div class="form-group">
																<label class="text-dark ft-medium">Skills Name {{$i}}</label>
																<input name="skill{{$i}}" type="text" class="form-control rounded" placeholder="Skills Name 1" value="{{$skl->skill}}">
															</div>
															<div class="form-group">
																<label class="text-dark ft-medium">Percentage</label>
																<input name="percentage{{$i}}" type="text" class="form-control rounded" placeholder="e.x. 80%" value="{{$skl->percentage}}">
															</div>
														</div>
													</div>
												@endforeach
												{{-- <div class="col-xl-12 col-lg-12">
													<div class="form-group">
														<button type="button" onclick="disableskill()"  class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Skills</button>
													</div>
												</div> --}}
												
											</div>
										</div>
										<div id="afterskill" class="col mx-auto p-auto" style="display: none">
											<i class="fa fa-check fa-10x text-success"></i> <br>
											<span> Added Successfully </span>
										</div>										
									</div>
								</div>	
								
							</div>					
							<script>
								function disableskill() {
									document.getElementById('skill').style.display = "none";
									document.getElementById('afterskill').style.display = "block";
									count++;
									check(count);
								}
								
							</script>
							<!-- Add Skills -->
							<div class="row" >
								<div class="mx-auto">
									<button type="submit" id="submitbutton"  class="btn btn-md ft-medium text-light rounded theme-bg">Update</button>
								</div>	
							</div>
		
						</div>
					</form>
					<!-- footer -->
					<div class="mt-5"></div>
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
			document.getElementById("jobber-manage-resume").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->			

	</body>
</html>