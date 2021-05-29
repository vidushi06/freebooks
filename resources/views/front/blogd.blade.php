@extends('front.master')
@section('title','Foodish | Blog')
@section('content')
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start blog details -->
	<div class="blog-box">
		@foreach($blog as $b)
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">

						<h2>{{$b->title}}</h2>
						<p>{{$b->subtitle}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
					<div class="blog-inner-details-page">
						<div class="blog-inner-box">
							<div class="side-blog-img">
								<img class="img-fluid" src="/upload/{{$b->image}}" alt="">							
								<div class="date-blog-up">
									NEW!!
								</div>
							</div>
							<div class="inner-blog-detail details-page">
								<h3>{{$b->imgsub}}</h3>
								<ul>
									<li><i class="zmdi zmdi-account"></i>Posted By : <span>{{$b->postedby}}</span></li>
									<li>|</li>
									<li><i class="zmdi zmdi-time"></i>Time : <span>{{$b->postedat}}</span></li>
								</ul>
								<p>{{$b->blog}}</p>
								<blockquote>
									<p>{{$b->blogquote}}</p>
								</blockquote>
								<p>{{$b->blogend}}</p>
							</div>
						</div>
						<div class="blog-comment-box">
							<h3>Comments</h3>
							<div class="comment-item">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Rubel Ahmed</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
							<div class="comment-item children">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Admin</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>1.30 pm</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
							<div class="comment-item">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Rubel Ahmed</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			
				
			
			</div>
		</div>
		@endforeach
	</div>
	<!-- End details -->
@endsection