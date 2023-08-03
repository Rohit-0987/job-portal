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
								<h1 class="ft-medium">All Candidates</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">All Candidates</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								{{-- <div class="d-flex align-items-center p-3 alert alert-danger">
									Your listings will be automatically removed after 30 days.
								</div> --}}
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
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Name</th>
												  <th scope="col">Email</th>
												  <th scope="col">Phone</th>
												  <th scope="col">Experience</th>
												  <th scope="col">Education</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data as $row)
												<tr>
													<td><div class="dash-title">
														<h4 class="mb-0 ft-medium fs-sm">{{$row->fname}} {{$row->lname}}
															{{-- <span class="medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2">Pending</span> --}}
														</h4>
														</div>
													</td>
													<td><div class="dash-filled"><span class="p-2 d-inline-flex align-items-center justify-content-center">{{$row->email}}</div></td>
													<td>{{$row->phone}}</td>
													<td>{{$row->experience}} years</td>
													<td>{{$row->education}}</td>
													<td>
														<div class="dash-action">
															<a href="company-view-jobber-profile{{$row->candidate_id}}" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															{{-- <a href="company-manage-jobs-edit{{$row->jobs_id}}" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a> --}}
															{{-- <a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a> --}}
														</div>
													</td>
												</tr>
												@endforeach
												{{-- <tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>18 Sep 2021</td>
													<td>12 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 04</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Web developer - Front-End & PHP developer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></span></div></td>
													<td>07 Sep 2021</td>
													<td>20 Nov 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 08</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">WordPress Developer & Database Management System</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></span></div></td>
													<td>21 Sep 2021</td>
													<td>20 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 12</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Senior Web Developer<span class="medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2">Pending</span></h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>10 Oct 2021</td>
													<td>12 Jan 2021</td>
													<td><a href="dashboard-manage-applications.html" class="gray rounded px-3 py-2 ft-medium">----</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>15 Oct 2021</td>
													<td>22 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 04</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
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
			document.getElementById("company-all-candidates").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>