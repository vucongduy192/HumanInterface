@extends('HI_03.layouts.master')

@section('content')
	<main>
		<div class="header-video">
			<div id="hero_video">
				<div class="content">
					<h3>Find a Doctor!</h3>
					<br>
					<!-- <p>
						What is the name of your medical centre or doctor?
					</p>
					<p>Or, just type in your symptoms</p> -->
					<form method="post" action="{{ route('grid-list') }}">
						@csrf
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" id="searchInp" class=" search-query" placeholder="Ex. Name, Specialization ....">
								<input type="submit" id="searchBtn" class="btn_search" value="Search">
							</div>
							<ul>
								<li>
									<input type="radio" id="all" name="radio_search" value="all" checked>
									<label for="all">All</label>
								</li>
								<li>
									<input type="radio" id="doctor" name="radio_search" value="doctor">
									<label for="doctor">Doctor</label>
								</li>
								<li>
									<input type="radio" id="clinic" name="radio_search" value="clinic">
									<label for="clinic">Clinic</label>
								</li>
								<li>
									<input type="radio" id="symptom" name="radio_search" value="symptom">
									<label for="symptom">Symptom</label>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<img src="{{ asset('HI_03/img/video_fix.png') }}" alt="" class="header-video--media" data-video-src="{{ asset('HI_03/video/intro') }}" data-teaser-source="{{ asset('HI_03/video/intro') }}" data-provider="" data-video-width="1920" data-video-height="750">
		</div>
		<!-- /Header video -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Discover the <strong>online</strong> appointment!</h2>
				<!-- <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p> -->
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p>You can find a doctor easily within a minute.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p>You can read detailed information about your doctor, their specializations, years of experience, reviews of other patients, and so on.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p>Book the doctor you would like to meet.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="{{ url('grid-list') }}" class="btn_1 medium">Find Doctor</a></p>
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Find by specialization</h2>
					<!-- <p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p> -->
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_1.svg') }}" width="60" height="60" alt="">
							<h3>Primary Care</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_2.svg') }}" width="60" height="60" alt="">
							<h3>Cardiology</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_3.svg') }}" width="60" height="60" alt="">
							<h3>MRI Resonance</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_4.svg') }}" width="60" height="60" alt="">
							<h3>Blood test</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_7.svg') }}" width="60" height="60" alt="">
							<h3>Laboratory</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_5.svg') }}" width="60" height="60" alt="">
							<h3>Dentistry</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_6.svg') }}" width="60" height="60" alt="">
							<h3>X - Ray</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('grid-list') }}" class="box_cat_home">
							<i class="icon-info-4"></i>
							<img src="{{ asset('HI_03/img/icon_cat_8.svg') }}" width="60" height="60" alt="">
							<h3>Piscologist</h3>
							<ul class="clearfix">
								<li><strong>124</strong>Doctors</li>
								<li><strong>60</strong>Clinics</li>
							</ul>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->
		
		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Most Viewed doctors</h2>
				<!-- <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p> -->
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<a href="{{ url('detail-page') }}">
						<div class="views"><i class="icon-eye-7"></i>140</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ url('detail-page') }}">
						<div class="views"><i class="icon-eye-7"></i>120</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ url('detail-page') }}">
						<div class="views"><i class="icon-eye-7"></i>115</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ url('detail-page') }}">
						<div class="views"><i class="icon-eye-7"></i>98</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ url('detail-page') }}">
						<div class="views"><i class="icon-eye-7"></i>98</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
			</div>
			<!-- /carousel -->
		</div>
		<!-- /container -->

		<!-- <div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="{{ asset('HI_03/img/app_img.svg') }}" alt="" class="img-fluid" width="500" height="433"></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3>Download <strong>Findoctor App</strong> Now!</h3>
						<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
							<a href="#0" class="fadeIn"><img src="{{ asset('HI_03/img/apple_app.png') }}" alt="" width="150" height="50" data-retina="true"></a>
							<a href="#0" class="fadeIn"><img src="{{ asset('HI_03/img/google_play_app.png') }}" alt="" width="150" height="50" data-retina="true"></a>
						</div>
					</div>
				</div>
				/row
			</div>
			/container
		</div> -->
		<!-- /app_section -->
	</main>
@endsection

@section('SPECIFIC SCRIPTS')
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('HI_03/js/video_header.js') }}"></script>
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});

		$(document).ready(function(){
            let searchInp = document.getElementById("searchInp");
            let searchBtn = document.getElementById("searchBtn");

            $('.tutorial-icon.open').tutorial([
                {
                    element: searchInp,
                    suggestion: 'Type in your symptoms, or the name of your medical centre or doctor'
                },
                {
                    element: searchBtn,
                    suggestion: 'And then find a doctor'
                }
            ]);
        })
	</script>
@endsection
