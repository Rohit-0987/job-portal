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
								<h1 class="ft-medium">Set Alert Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Set Alert Jobs</a></li>
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
					
					{{-- <div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Title</th>
												  <th scope="col">Designation</th>
												  <th scope="col">Posted Date</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Senior Web Developer</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div></div></td>
													<td>Manager</td>
													<td>10 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>Denver, USA</span></div></div></td>
													<td>Team Leader</td>
													<td>18 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Web developer - Front-End & PHP developer</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>California</span></div></div></td>
													<td>Jr. Manager</td>
													<td>07 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">WordPress Developer & Database Management System</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>Melbourn</span></div></div></td>
													<td>Manager</td>
													<td>21 Sep 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Senior Web Developer</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>Liverpool</span></div></div></td>
													<td>Human Resource</td>
													<td>10 Oct 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>Liverpool</span></div></div></td>
													<td>Sr, Human Resource</td>
													<td>15 Oct 2021</td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
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
					<!-- Applications Edit Modal -->
					<div class="text-center mb-4">
						<h2 class="m-0 ft-regular">	
							@if(blank($data))
								You have'nt set any alerts. 
							@else
								You have set alerts for {{$data[0]->alert_category}}, can update it!
							@endif
						</h2>
					</div>
					<div class="modal-dialog modal-xl login-pop-form" role="document" style="margin-bottom: 15rem;">
						<div class="modal-content" id="appeditmodal">
							
							<div class="modal-body p-5">
								<div class="text-center mb-4">
									<h2 class="m-0 ft-regular">Set Alert</h2>
								</div>	
								
								<form method="GET" action="jobber-set-job-alert">				
									<div class="form-group">
										<select name="alert" class="form-control rounded">
											<option>Set Alert</option>
											<option value="Web Developer">Web Developer</option>
											<option value="App Developer">App Developer</option>
											<option value="Software Developer">Software Developer</option>
											<option value="Cloud Computing">Cloud Computing</option>
											<option value="React Developer">React Developer</option>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Set Alert</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- End Modal -->
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
			document.getElementById("jobber-alert").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

	</body>
</html>