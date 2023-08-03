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
			
			<!-- ======================= About Us Detail ======================== -->
			<section class="middle">
				<div class="container">
					<div class="row align-items-center justify-content-between">
					
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<h2 class="ft-medium mb-4">About MESHLINKS !</h2>
								<p class="mb-4">MESH is a well known name in HR services servicing companies across the globe her explanation. MESH which was started in 2002 as a partnership firm MESHLINKS CONSULTING with a capital of Rs. 25000/- Today it has grown into a full spectrum HR services provider for clients worldwide. It has helped generate career opportunities for number of individuals in over 5 countries and has worked for over 100 organisations worldwide <a href="https://500homeruns.net">https://500homeruns.net</a></p>
								<p class="mb-4">MESH offers the broadest HR services portfolio ranging from Executive Search (C-aspect), Consulting and Outsourcing, HRMS, Training & Development. The organization has built a reputation of sourcing the best talent from its database. MESH also boasts of a huge network with top-level talent across industry sectors and has helped its clients grow, not just in terms of Recruitment but also as an organisation by streamlining their HR operations.</p>
								<p class="mb-4">MESH continues to focus on developing made to order and novel HR services, leveraging on its distinctive strength of capability across all HR service functions.</p>
								<p class="mb-4">MESH boasts of a wide clientele not just in India but also in USA, Australia, New Zealand, Middle East, South Africa and UK.</p>
								{{-- <div class="form-group mt-4">
									<a href="#" class="btn theme-bg text-white">See More Info</a>
								</div> --}}
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<img src="assets/img/about-1.png" class="img-fluid rounded" alt="" />
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= About Us End ======================== -->
			
			<!-- ======================= About Us Detail ======================== -->
			<section class="middle">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<img src="assets/img/about-2.png" class="img-fluid rounded" alt="" />
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<h2 class="ft-medium mb-4">Our MISSION</h2>
								<p class="mb-4">To offer integrated, finest quality HR Services enabling us to grow to become the first choice in Human Resource Management and to be the most trusted partner in our field of work, through appreciated convincing relationships with our clients at CASINO10</p>
								{{-- <div class="form-group mt-4">
									<a href="#" class="btn theme-bg text-white">See More Info</a>
								</div> --}}
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= About Us End ======================== -->
			
			<!-- ======================= About Us Detail ======================== -->
			<section class="middle">
				<div class="container">
					<div class="row align-items-center justify-content-between">
					
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<h2 class="ft-medium mb-4">Our VISION !</h2>
								<p class="mb-4">To grow beyond the scope of expectations and constantly innovate in order to become a brand of unmatched services.</p>
								{{-- <div class="form-group mt-4">
									<a href="#" class="btn theme-bg text-white">See More Info</a>
								</div> --}}
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="abt_caption">
								<img src="assets/img/about-1.png" class="img-fluid rounded" alt="" />
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= About Us End ======================== -->
			
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
			<!-- ======================= Newsletter end ============================ -->
			
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