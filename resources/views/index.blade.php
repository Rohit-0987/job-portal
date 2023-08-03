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

			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= Home Banner ======================== -->
			<div class="home-banner margin-bottom-0" style="background:#28b661 url(images/home-1.jpg) no-repeat;" data-overlay="4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="banner_caption text-center mb-5">
								<h1 class="banner_title ft-bold mb-1">The Most Exciting Jobs</h1>
								<p class="fs-md ft-medium">Your Dream Jobs is Waiting</p>
							</div>
							
							<form class="bg-white rounded p-1" action="/" method="GET">
								<div class="row no-gutters">
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<input name="job_title" type="text" class="form-control lg left-ico" placeholder="Job Title" />
											<i class="bnc-ico lni lni-search-alt"></i>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<input name="location" type="text" class="form-control lg left-ico" placeholder="Location" />
											<i class="bnc-ico lni lni-target"></i>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<select class="custom-select lg b-0">
											  <option value="1">Choose Categories</option>
											  <option value="2">Information Technology</option>
											  <option value="3">Cloud Computing</option>
											  <option value="4">Engineering Services</option>
											  <option value="5">Healthcare/Pharma</option>
											  <option value="6">Telecom/ Internet</option>
											  <option value="7">Finance/Insurance</option>
											</select>
										</div>
									</div>
									<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
										<div class="form-group mb-0 position-relative">
											<button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="submit">Find Job</button>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ======================= Home Banner ======================== -->
			
			<!-- ======================= Job List ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-muted mb-0">Trending Jobs</h6>
								<h2 class="ft-bold">All Popular Listed jobs</h2>
							</div>
						</div>
					</div>
					
					<!-- row -->
					<div class="row align-items-center">
					
						<!-- Single -->
						@foreach($jobs as $job)
						<a href="job-detail{{$job->jobs_id}}">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="job_grid border rounded ">
								<div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
								<div class="position-absolute ab-right">
									<span class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{$job->job_type}}</span>
								</div>
								<div class="job_grid_thumb mb-2 pt-5 px-3">
									<span class="d-block text-center m-auto"><img src="job-profile-img/{{$job->job_img}}" class="img-fluid" width="70" alt="" /></span>
								</div>
								<div class="job_grid_caption text-center pb-3 px-3">
									<h4 class="mb-0 ft-medium medium"><a class="text-dark fs-md">{{$job->job_title}}</a></h4>
									<div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>{{$job->country}}, {{$job->city}}</span></div>
								</div>
								<div class="job_grid_footer pb-4 px-3">
									<ul class="p-0 skills_tag text-center">
										<?php $i=1; ?>
										@foreach($job->getJobSkills as $skill)
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">{{$skill->skill}}</span></li>
											@if($i == 5)
											<?php break; ?>
											@endif
											<?php $i++;?>
										@endforeach
										@if($job->getJobSkills->count() -$i > 0)
										<li><span class="px-2 py-1 medium skill-bg rounded text-dark">+{{$job->getJobSkills->count() -$i}} More</span></li> 
										@endif
									</ul>
									<a  href="job-detail{{$job->jobs_id}}" style="width:fit-content" class="px-3 py-2 d-block text-center m-auto medium theme-bg rounded text-light">Details</a>
								</div>
							</div>
						</div>
						</a>
						@endforeach					
					</div>
					<!-- row -->
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="job-search" class="btn btn-md theme-bg rounded text-white hover-theme">Explore More Jobs<i class="lni lni-arrow-right-circle ml-2"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Job List ======================== -->
			
			<!-- ======================= All category ======================== -->
			<section class="space gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-muted mb-0">Popular Categories</h6>
								<h2 class="ft-bold">Browse Top Categories</h2>
							</div>
						</div>
					</div>
					
					<!-- row -->
					<div class="row align-items-center justify-content-center">
						@foreach($categerios as $cat)
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-laptop-phone fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">{{$cat->industry}}</h4>
										{{-- <span class="text-muted">607 Jobs</span> --}}
									</div>
								</a>
							</div>
						</div>
						@endforeach
						{{-- <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-cloud fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Cloud Computing</h4>
										<span class="text-muted">960 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-shopify fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Logistics/Shipping</h4>
										<span class="text-muted">438 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-construction fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Engineering Services</h4>
										<span class="text-muted">644 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-phone-set fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Telecom/ Internet</h4>
										<span class="text-muted">380 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-sthethoscope fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Healthcare/Pharma</h4>
										<span class="text-muted">472 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-money-protection fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Finance/Insurance</h4>
										<span class="text-muted">654 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-diamond fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Product Software</h4>
										<span class="text-muted">732 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-briefcase fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Diversified/Retail</h4>
										<span class="text-muted">610 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-graduation fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Education</h4>
										<span class="text-muted">960 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-mastercard fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Banking/BPO</h4>
										<span class="text-muted">740 Jobs</span>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
							<div class="cats-wrap text-center">
								<a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-gallery fs-lg theme-cl"></i></div>
									<div class="cats-box-caption">
										<h4 class="fs-md mb-0 ft-medium m-catrio">Printing & Packaging</h4>
										<span class="text-muted">425 Jobs</span>
									</div>
								</a>
							</div>
						</div> --}}
						
					</div>
					<!-- /row -->
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="job-search" class="btn btn-md bg-dark rounded text-light hover-theme">Browse All Categories<i class="lni lni-arrow-right-circle ml-2"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= All category ======================== -->
			
			<!-- ======================= About Start ============================ -->
			<section class="space">
				<div class="container">
					
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="m-spaced">
								<div class="position-relative">
									<div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About Us</span></div>
									<h2 class="ft-bold mb-3">Create and Build Your<br>Attractive Profile</h2>
									<p class="mb-2">You’ve just graduated and you’re ready to take on the world. But where do you start? The Job Search of course and that one document that can make or break your chances of Landing you your dream Job is your Resume, CV, and Cover Letter. Download Fully Editable Sample Now below. Our professional Resume Designs are proven to land interviews. Download free Resume/CV and Cover Letter Templates..</p>
									<p class="mb-4">You’ve just graduated and you’re ready to take on the world. But where do you start? The Job Search of course and that one document that can make or break your chances of Landing you your dream Job is your Resume, CV, and Cover Letter. Download Fully Editable Sample Now below. Our professional Resume Designs are proven to land interviews. Download free Resume/CV and Cover Letter Templates..</p>
								</div>
								<div class="position-relative row">
									<div class="col-lg-4 col-md-4 col-4">
										<h3 class="ft-bold theme-cl mb-0">10k+</h3>
										<p class="ft-medium">Active Jobs</p>
									</div>
									<div class="col-lg-4 col-md-4 col-4">
										<h3 class="ft-bold theme-cl mb-0">12k+</h3>
										<p class="ft-medium">Web Designers</p>
									</div>
									<div class="col-lg-4 col-md-4 col-4">
										<h3 class="ft-bold theme-cl mb-0">07k+</h3>
										<p class="ft-medium">Employers</p>
									</div>
									{{-- <div class="col-lg-12 col-md-12 col-12 mt-3">
										<a href="javascript:void(0);" class="btn btn-md theme-bg-light rounded theme-cl hover-theme">See Details<i class="lni lni-arrow-right-circle ml-2"></i></a>
									</div> --}}
								</div>
							</div>
						</div>
						
						<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
							<div class="position-relative">
								<img src="images/home-2.png" class="img-fluid" style="border-radius: 10%" alt="" />
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= About Start ============================ -->
			
			<!-- ======================= About Start ============================ -->
			<section class="space pt-0">
				<div class="container">
					
					<div class="row align-items-center justify-content-between">
					
						<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
							<div class="position-relative">
								<img src="images/home-3.png" class="img-fluid" style="border-radius: 10%" alt="" />
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">	
							<div class="m-spaced">
								<div class="position-relative">
									<div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About Us</span></div>
									<h2 class="ft-bold mb-3">Get All The Jobs Details<br>You're Looking For</h2>
									<p class="mb-3">You’ve just graduated and you’re ready to take on the world. But where do you start? The Job Search of course and that one document that can make or break your chances of Landing you your dream Job is your Resume, CV, and Cover Letter. Download Fully Editable Sample Now below. Our professional Resume Designs are proven to land interviews. Download free Resume/CV and Cover Letter Templates..</p>
								</div>
								<div class="position-relative row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
											<div class="d-flex align-items-center">
											  <div class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
												<i class="fas fa-check"></i>
											  </div>
											  <h6 class="mb-0 ml-3">Full lifetime access</h6>
											</div>
										</div>
										<div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
											<div class="d-flex align-items-center">
											  <div class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
												<i class="fas fa-check"></i>
											  </div>
											  <h6 class="mb-0 ml-3">20+ downloadable resources</h6>
											</div>
										</div>
										<div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
											<div class="d-flex align-items-center">
											  <div class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
												<i class="fas fa-check"></i>
											  </div>
											  <h6 class="mb-0 ml-3">Certificate of completion</h6>
											</div>
										</div>
										<div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
											<div class="d-flex align-items-center">
											  <div class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
												<i class="fas fa-check"></i>
											  </div>
											  <h6 class="mb-0 ml-3">Free Trial 7 Days</h6>
											</div>
										</div>
									</div>
									{{-- <div class="col-lg-12 col-md-12 col-12 mt-4">
										<a href="javascript:void(0);" class="btn btn-md theme-bg rounded text-white hover-theme">Get Started<i class="lni lni-arrow-right-circle ml-2"></i></a>
									</div> --}}
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ======================= About Start ============================ -->
			
			<!-- ======================= Our Partner Start ============================ -->
			<section class="p-0">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-muted mb-0">Our Partners</h6>
								<h2 class="ft-bold">We Have Worked with <span class="theme-cl">10,000+</span> Trusted Companies</h2>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						@for($i=1 ; $i<=10 ; $i++)
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company{{$i}}.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						@endfor
						{{-- <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
							<div class="empl-thumb text-center px-3 py-4">
								<img src="partner/company1.png" class="img-fluid mx-auto" alt="" />
							</div>
						</div> --}}
						
					</div>
					
				</div>
			</section>
			<!-- ======================= Our Partner Start ============================ -->
			
			<!-- ======================= Blog Start ============================ -->
			<section class="space min">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-4">
								<h6 class="text-muted mb-0">Latest News</h6>
								<h2 class="ft-bold">Pickup New Updates</h2>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						
						<!-- Single Item -->
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="blg_grid_box">
								<div class="blg_grid_thumb">
									<a href="blog-detail.html"><img src="blog/blog-1.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="blg_grid_caption">
									<div class="blg_tag"><span>Marketing</span></div>
									<div class="blg_title"><h4><a href="/">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>
									<div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
								</div>
								<div class="crs_grid_foot">
									<div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
										<div class="crs_fl_first">
											<div class="crs_tutor">
												<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="35" alt=""></a></div>
											</div>
										</div>
										<div class="crs_fl_last">
											<div class="foot_list_info">
												<ul>
													<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
													<li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="blg_grid_box">
								<div class="blg_grid_thumb">
									<a href="blog-detail.html"><img src="blog/blog-2.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="blg_grid_caption">
									<div class="blg_tag"><span>Business</span></div>
									<div class="blg_title"><h4><a href="blog-detail.html">Let's Know How Skillup Work Fast and Secure?</a></h4></div>
									<div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
								</div>
								<div class="crs_grid_foot">
									<div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
										<div class="crs_fl_first">
											<div class="crs_tutor">
												<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="35" alt=""></a></div>
											</div>
										</div>
										<div class="crs_fl_last">
											<div class="foot_list_info">
												<ul>
													<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
													<li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="blg_grid_box">
								<div class="blg_grid_thumb">
									<a href="blog-detail.html"><img src="blog/blog-3.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="blg_grid_caption">
									<div class="blg_tag"><span>Accounting</span></div>
									<div class="blg_title"><h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a></h4></div>
									<div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>
								</div>
								<div class="crs_grid_foot">
									<div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
										<div class="crs_fl_first">
											<div class="crs_tutor">
												<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="35" alt=""></a></div>
											</div>
										</div>
										<div class="crs_fl_last">
											<div class="foot_list_info">
												<ul>
													<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>
													<li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ======================= Blog Start ============================ -->
	
			<!-- ======================= Newsletter Start ============================ -->
			<section class="space bg-cover" style="background:#28b661 url(assets/img/landing-bg.png) no-repeat;">
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
											<button class="btn full-width custom-height-lg bg-dark text-white fs-md" type="submit">Subscribe</button>
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
			<footer class="dark-footer skin-dark-footer style-2">
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