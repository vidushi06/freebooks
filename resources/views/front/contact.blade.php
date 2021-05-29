@extends('front.master')
@section('title','Foodish | Contact')
@section('content')
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	
	 <!-- Start Contact info -->
	<div class="contact-imfo-box">
		@foreach($conn as $con)
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							{{$con->phone}}
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							{{$con->email}}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							{{$con->location}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
		<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3>About Us</h3>
					<p>{{$con->aboutus}}</p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">{{$con->address}}</p>
					<p class="lead"><a href="#">{{$con->phonesec}}</a></p>
					<p><a href="#"> {{$con->emailsec}}</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span> {{$con->monday}}</p>
					<p><span class="text-color">Tue-fri :</span> {{$con->tuewed}}</p>
					<p><span class="text-color">Sat-Sun :</span> {{$con->satsun}}</p>
				</div>
			</div>
			@endforeach
		</div>
			

@endsection