@extends('front.master')
@section('title','welcome | Foodish')
@section('content')
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			@foreach($data as $a)
			<li class="text-left">
				<img src="upload/{{$a->image}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>{{$a->title}}</strong></h1>
							<p class="m-b-40">{{$a->description}}</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				@foreach($b as $a)
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>{{$a->title}}</span></h1>
						<h4>{{$a->subtitle}}</h4>
						<p>{{$a->description}}</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="upload/{{$a->image}}" alt="" class="img-fluid">
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@foreach($menu as $a)
					<div class="heading-title text-center">
						
						<h2>{{$a->name}}</h2>
						<p>{{$a->subname}}</p>
						
					</div>
					@endforeach
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								@foreach($mimages as $img)
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="/upload/{{$img->image}}" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>{{$img->ititle}}</h4>
											<p>{{$img->isubtitle}}</p>
											<h5>{{$img->iprice}}</h5>
										</div>
									</div>
								</div>
								@endforeach
								
								
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@foreach($gallery as $gal)
					<div class="heading-title text-center">
						<h2>{{$gal->gtitle}}</h2>
						<p>{{$gal->gdescription}}</p>
					</div>
					@endforeach
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					@foreach($gimage as $galimg)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="/upload/{{$galimg->image}}" alt="Gallery Images">
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						@foreach($review as $re)
						<h2>{{$re->title}}</h2>
						<p>{{$re->subtitle}}</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								@foreach($txt as $text)
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">{{$text->name}}</strong></h5>
								<h6 class="text-dark m-0">{{$text->post}}</h6>
								<p class="m-0 pt-3">{{$text->comment}}</p>
								
								@endforeach
							</div>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	
@endsection

