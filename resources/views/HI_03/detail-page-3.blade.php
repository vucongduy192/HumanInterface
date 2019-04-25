@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
@endsection

@section('content')
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="{{ url('/') }}">Trang chủ</a></li>
					<li><a href="{{ url('grid-list') }}">Tất cả bác sĩ</a></li>
					<li>Thông tin bác sĩ</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
						</figure>
						<small>Khoa Tai Mũi Họng</small>
						<h1>Bác sĩ Lê Thị Hương</h1>
						<span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
						</span>
						<ul class="statistic">
							<li>854 lượt xem</li>
							<li>124 bệnh nhân</li>
						</ul>
						<ul class="contacts">
							<li><h6>Địa chỉ</h6>29 Nguyễn Bỉnh Khiêm, Nguyễn Du, Hai Bà Trưng, Hà Nội</li>
							<li><h6>Điện thoại</h6><a href="tel://000434323342">0975 056 124</a></li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> Xem trên bản đồ</a></div>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">
					
					<div class="box_general_2 add_bottom_45">
						<div class="main_title_4">
							<h3><i class="icon_circle-slelected"></i>Chọn ngày và giờ khám</h3>
						</div>
						
						<div class="row add_bottom_45">
							<div class="col-lg-7">
								<div class="form-group">
									<div id="calendar"></div>
									<input type="hidden" id="my_hidden_input">
									<ul class="legend">
										<li><strong></strong>Lịch trống</li>
										<li><strong></strong>Bận</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-5">
								<ul class="time_select version_2 add_top_20">
									<li>
										<input type="radio" id="radio1" name="radio_time" value="09.30am">
										<label for="radio1">09.30</label>
									</li>
									<li>
										<input type="radio" id="radio2" name="radio_time" value="10.00am">
										<label for="radio2">10.00</label>
									</li>
									<li>
										<input type="radio" id="radio3" name="radio_time" value="10.30am">
										<label for="radio3">10.30</label>
									</li>
									<li>
										<input type="radio" id="radio4" name="radio_time" value="11.00am">
										<label for="radio4">11.00</label>
									</li>
									<li>
										<input type="radio" id="radio5" name="radio_time" value="11.30am">
										<label for="radio5">11.30</label>
									</li>
									<li>
										<input type="radio" id="radio6" name="radio_time" value="12.00am">
										<label for="radio6">12.00</label>
									</li>
									<li>
										<input type="radio" id="radio7" name="radio_time" value="01.30pm">
										<label for="radio7">13.30</label>
									</li>
									<li>
										<input type="radio" id="radio8" name="radio_time" value="02.00pm">
										<label for="radio8">14.00</label>
									</li>
									<li>
										<input type="radio" id="radio9" name="radio_time" value="02.30pm">
										<label for="radio9">14.30</label>
									</li>
									<li>
										<input type="radio" id="radio10" name="radio_time" value="03.00pm">
										<label for="radio10">15.00</label>
									</li>
									<li>
										<input type="radio" id="radio11" name="radio_time" value="03.30pm">
										<label for="radio11">15.30</label>
									</li>
									<li>
										<input type="radio" id="radio12" name="radio_time" value="04.00pm">
										<label for="radio12">16.00</label>
									</li>
								</ul>
							</div>
						</div>
						<!-- /row -->
						
						<div class="main_title_4">
							<h3><i class="icon_circle-slelected"></i>Chọn hình thức khám</h3>
						</div>
						<ul class="treatments clearfix">
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
									<label for="visit1" class="css-label">Khám tổng quát <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
									<label for="visit2" class="css-label">Lấy dị vật trong tai <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
									<label for="visit3" class="css-label">Lấy dị vật trong mũi <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
									<label for="visit4" class="css-label">Bệnh lý về họng – thanh quản <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit5" name="visit5">
									<label for="visit5" class="css-label">Phẫu thuật xoang mũi <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" class="css-checkbox" id="visit6" name="visit6">
									<label for="visit6" class="css-label">Phẫu thuật vá màng nhĩ <strong>200.000 VNĐ</strong></label>
								</div>
							</li>
						</ul>
						<hr>
						<div class="text-center"><a href="{{ url('booking-page') }}" class="btn_1 medium">Đặt lịch</a></div>
					</div>
					<!-- /box_general -->
					
					<div class="tabs_styled_2">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
							</li>
						</ul>
						<!--/nav-tabs -->

						<div class="tab-content">
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								
								<p class="lead add_bottom_30">Dr Julia Jhones is a highly trained practitioner of dry needling for acute and chronic musculoskeletal pain.</p>
								<div class="indent_title_in">
									<i class="pe-7s-user"></i>
									<h3>Professional statement</h3>
									<!-- <p>Mussum ipsum cacilds, vidis litro abertis.</p> -->
								</div>
								<div class="wrapper_indent">
									<p>She is the author of the “Australian Drug Guide”, a plain language multi-bestselling guide to prescription and over the counter drugs.

									The Eighth edition of the Australian Drug Guide will be released by Black Inc. in 2016 in print, and as a mobile application.</p>
									<h6>Specializations</h6>
									<div class="row">
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
									</div>
									<!-- /row-->
								</div>
								<!-- /wrapper indent -->
								
								<hr>
								
								<div class="indent_title_in">
									<i class="pe-7s-news-paper"></i>
									<h3>Education</h3>
									<!-- <p>Mussum ipsum cacilds, vidis litro abertis.</p> -->
								</div>
								<div class="wrapper_indent">
									<p>Dr Julia Jhones graduated with honours from Faculty of Medicine, University of Sydney in 1983.</p>
									<h6>Curriculum</h6>
									<ul class="list_edu">
										<li><strong>New York Medical College</strong> - Doctor of Medicine</li>
										<li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
										<li><strong>New York Medical College</strong> - Master Internal Medicine</li>
									</ul>
								</div>
								<!--  End wrapper indent -->
								
								<hr>

								<div class="indent_title_in">
									<i class="pe-7s-cash"></i>
									<h3>Prices &amp; Payments</h3>
									<!-- <p>Mussum ipsum cacilds, vidis litro abertis.</p> -->
								</div>
								<div class="wrapper_indent">
									<!-- <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p> -->
									<table class="table table-responsive table-striped">
										<thead>
											<tr>
												<th>Service - Visit</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>New patient visit</td>
												<td>$34</td>
											</tr>
											<tr>
												<td>General consultation</td>
												<td>$60</td>
											</tr>
											<tr>
												<td>Back Pain</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>Diabetes Consultation</td>
												<td>200.000 VNĐ</td>
											</tr>
											<tr>
												<td>Eating disorder</td>
												<td>$60</td>
											</tr>
											<tr>
												<td>Foot Pain</td>
												<td>$35</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--  End wrapper_indent -->

							</div>
							<!-- /tab_2 -->

							<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
								<div class="reviews-container">
									<div class="row">
										<div class="col-lg-3">
											<div id="review_summary">
												<strong>4.7</strong>
												<div class="rating">
													<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
												</div>
												<small>Based on 4 reviews</small>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
											</div>
											<!-- /row -->
										</div>
									</div>
									<!-- /row -->
									
									<hr>
									
									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Admin – April 03, 2016:
											</div>
											<div class="rev-text">
												<p>
													She is the best doctor I have ever met
												</p>
											</div>
										</div>
									</div>
									<!-- End review-box -->

									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Ahsan – April 01, 2016
											</div>
											<div class="rev-text">
												<p>
													Good service
												</p>
											</div>
										</div>
									</div>
									<!-- End review-box -->

									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Sara – March 31, 2016
											</div>
											<div class="rev-text">
												<p>
													Very good
												</p>
											</div>
										</div>
									</div>
									<!-- End review-box -->
								</div>
								<!-- End review-container -->
							</div>
							<!-- /tab_3 -->
						</div>
						<!-- /tab-content -->
					</div>
					<!-- /tabs_styled -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
@endsection

@section('SPECIFIC SCRIPTS')
	<script src="{{ asset('HI_03/js/bootstrap-datepicker.js') }}"></script>
	<script>
			$('#calendar').datepicker({
				todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
				format: "yyyy-mm-dd",
				datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			});
	</script>
@endsection
