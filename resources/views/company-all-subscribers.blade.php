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
								<h1 class="ft-medium">All Subscribers</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">All Subscribers</a></li>
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
												  <th scope="col">No</th>
												  <th scope="col">Email</th>
												  <th scope="col">Subscribed Date</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data as $no => $row)
												<?php $no += 1 ?>
												<tr>
													<td><div class="dash-title">
														<h4 class="mb-0 ft-medium fs-sm">{{$no}}
															{{-- <span class="medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2">Pending</span> --}}
														</h4>
														</div>
													</td>
													<td>{{$row->email}}</td>
													<td>{{$row->created_at->format('d M Y')}}</td>
												</tr>
												@endforeach
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
			document.getElementById("company-all-subscribers").className = " active";  
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>