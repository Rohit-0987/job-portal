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
			<!-- End Alert sessions -->
			<!-- ======================= FAQ's Detail ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-4">
								<h1 class="ft-bold mb-0">FAQ's Section</h1>
								<h3 class="ft-medium pt-1 mb-3">Frequently Asked Questions</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
							
							<div class="d-block position-relative border rounded py-3 px-3 mb-4">
								<h4 class="ft-medium">Orders:</h4>
								<div id="accordion" class="accordion">
									<div class="card">
										<div class="card-header" id="h1">
										  <h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#ord1" aria-expanded="true" aria-controls="ord1">
												Can I track my order item?
											</button>
										  </h5>
										</div>

										<div id="ord1" class="collapse show" aria-labelledby="h1" data-parent="#accordion">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h2">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord2" aria-expanded="false" aria-controls="ord2">
												Who pays for return postage?
											</button>
										  </h5>
										</div>
										<div id="ord2" class="collapse" aria-labelledby="h2" data-parent="#accordion">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h3">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord3" aria-expanded="false" aria-controls="ord3">
												How do I apply a promotional code?
											</button>
										  </h5>
										</div>
										<div id="ord3" class="collapse" aria-labelledby="h3" data-parent="#accordion">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="d-block position-relative border rounded py-3 px-3 mb-4">
								<h4 class="ft-medium">Shipping & Returns:</h4>
								<div id="accordion1" class="accordion">
									<div class="card">
										<div class="card-header" id="h4">
										  <h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#ord4" aria-expanded="true" aria-controls="ord4">
												How long does it take for home delivery?
											</button>
										  </h5>
										</div>

										<div id="ord4" class="collapse show" aria-labelledby="h4" data-parent="#accordion1">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h5">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord5" aria-expanded="false" aria-controls="ord5">
												What courier do you use for deliveries?
											</button>
										  </h5>
										</div>
										<div id="ord5" class="collapse" aria-labelledby="h5" data-parent="#accordion1">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h6">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord6" aria-expanded="false" aria-controls="ord6">
												Can I collect from a local store?
											</button>
										  </h5>
										</div>
										<div id="ord6" class="collapse" aria-labelledby="h6" data-parent="#accordion1">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="d-block position-relative border rounded py-3 px-3">
								<h4 class="ft-medium">Payment:</h4>
								<div id="accordion2" class="accordion">
									<div class="card">
										<div class="card-header" id="h7">
										  <h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#ord7" aria-expanded="true" aria-controls="ord7">
												Do you offer a VAT discount to non EU customers?
											</button>
										  </h5>
										</div>

										<div id="ord7" class="collapse show" aria-labelledby="h7" data-parent="#accordion2">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h8">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord8" aria-expanded="false" aria-controls="ord8">
												Why have you not refunded the original delivery charge?
											</button>
										  </h5>
										</div>
										<div id="ord8" class="collapse" aria-labelledby="h8" data-parent="#accordion2">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="h9">
										  <h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ord9" aria-expanded="false" aria-controls="ord9">
												Do you offer a VAT discount to non EU customers?
											</button>
										  </h5>
										</div>
										<div id="ord9" class="collapse" aria-labelledby="h9" data-parent="#accordion2">
										  <div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										  </div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= FAQ's End ======================== -->
			
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
							<form class="bg-white rounded p-1" action="insert_subscribers" method="GET">
								<div class="row no-gutters">
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
										<div class="form-group mb-0 position-relative">
											<input name="email" type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
											<i class="bnc-ico lni lni-envelope"></i>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
										<div class="form-group mb-0 position-relative">
											<button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="submit">Subscribe</button>
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
				@include('footer-big')
				
				@include('footer')
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
		@include('scripts')
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>