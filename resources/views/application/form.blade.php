@extends('layouts.app1')

@section('title', '表單')

@section('content')
<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>

	<div class="cd-projects-container">
		<ul class="cd-projects-previews">
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 1</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 2</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 3</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 4</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
		</ul> <!-- .cd-projects-previews -->

		<ul class="cd-projects">
			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 1</h2>
						<p>Brief description of the project here</p>
					</div>
				</div>

				<div class="cd-project-info">
					<p>
						表單
					</p>
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 2</h2>
						<p>Brief description of the project here</p>
					</div>
				</div>

				<div class="cd-project-info">
					<p>
						表單
					</p>
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 3</h2>
						<p>Brief description of the project here</p>
					</div>
				</div>

				<div class="cd-project-info">
					<p>
						表單
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 4</h2>
						<p>Brief description of the project here</p>
					</div>
				</div>

				<div class="cd-project-info">
					<p>
						表單。
					</p>
				</div> <!-- .cd-project-info -->
			</li>
		</ul> <!-- .cd-projects -->

		<button class="scroll cd-text-replace">Scroll</button>
	</div> <!-- .cd-project-container -->

	<nav class="cd-primary-nav" id="primary-nav">
		<ul>
			<li class="cd-label">Navigation</li>
			<li><a href="#0">The team</a></li>
			<li><a href="#0">Our services</a></li>
			<li><a href="#0">Our projects</a></li>
			<li><a href="#0">Contact us</a></li>
		</ul>
	</nav> <!-- .cd-primary-nav -->
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{asset('css/application/reset.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{asset('css/application/style.css')}}"> <!-- Resource style -->
	<script src="{{asset('js/application/modernizr.js')}}"></script> <!-- Modernizr -->

@endsection

@section('js')
<script>

</script>
<script src="{{asset('js/application/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/application/main.js')}}></script> <!-- Resource jQuery -->
@endsection
