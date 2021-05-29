@extends('front.master')
@section('title','Foodish | About')
@section('content')
<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						@foreach($abt as $ab)
						<h1>{{$ab->title}}</h1>
						<h4>{{$ab->subtitle}}</h4>
						<p>{{$ab->description}}</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p>{{$ab->subdescription}} </p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- End About -->

@endsection