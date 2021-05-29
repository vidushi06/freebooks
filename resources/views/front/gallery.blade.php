@extends('front.master');
@section('title','Foodish | Gallery')
@section('content');
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						@foreach($gallery as $gal)
						<h2>{{$gal->gtitle}}</h2>
						<p>{{$gal->gdescription}}</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					@foreach($gimage as $a)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="/upload/{{$a->image}}" alt="Gallery Images">
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

@endsection