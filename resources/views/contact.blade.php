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
			
			
			<!-- ======================= Contact Page Detail ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center mb-5">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Contact Us</h2>
							</div>
						</div>
					</div>
					
					<div class="row align-items-start justify-content-between">
					
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="card-wrap-body mb-4 gray rounded p-3">
								<h4 class="ft-medium mb-3 theme-cl">Visit Here</h4>
								<p>
									10, Om Shri Ganesh CHSL, Dahanukarwadi, <br>
									Mumbai 400067, Maharashtra, India<br>
									Gokhale Road, Kandivali (W).
								</p>
							</div>
							
							<div class="card-wrap-body mb-3 gray rounded p-3">
								<h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
								<h6 class="ft-medium mb-1">Customer Care:</h6>
								<p class="mb-2">+91 993 032 0404</p>
								<h6 class="ft-medium mb-1">Careers:</h6>
								<p>+91 702 130 0816</p>
							</div>
							
							<div class="card-wrap-body mb-3 gray rounded p-3">
								<h4 class="ft-medium mb-3 theme-cl">Drop A Mail</h4>
								<p>Fill out our form and we will contact you within 24 hours.</p>
								<p class="lh-1 text-dark">shripal@meshlinks.in</p>
								<p class="lh-1 text-dark">shripal@meshlinks.in</p>
							</div>
						</div>
						
						<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
							<form class="row" method="GET" action="insert-contactus">
									
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Your Name *</label>
										<input name="name" type="text" class="form-control" >
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Your Email *</label>
										<input name="email" type="text" class="form-control" >
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Subject</label>
										<input name="subject" type="text" class="form-control" >
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Message</label>
										<textarea name="message" class="form-control ht-80"></textarea>
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-dark">Send Message</button>
									</div>
								</div>
								
							</form>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Contact Page End ======================== -->
			
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