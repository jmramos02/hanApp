<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{HTML::style('css/style.css')}}
	{{HTML::style('css/ionicons.min.css')}}
	@yield('head')
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Hello Worrrld</title>

</head>
<body>
	<div class = "row my-container">
		<div class="col-md-6 image">
			{{HTML::image('img/header.jpg')}}
		</div>
		<div class="col-md-6">
			<ul class="nav">
			  <li class="active"><a href="{{URL::to('index')}}"><i class = "ion-home"></i>&nbsp;Home</a></li>
			  <li><a href="#"><i class = "ion-ios7-people"></i>&nbsp;About Us</a></li>
			  <li><a href="{{URL::to('projects')}}"><i class = "ion-android-folder"></i>&nbsp;View Projects</a></li>
			  <li><a href="#"><i class = "ion-filing"></i>&nbsp;Submit Bidding</a></li>
			  <li><a href="#"><i class = "ion-ios7-telephone"></i>&nbsp;Contact Us</a></li>
			</ul>
		</div>
	</div>
	@yield('content')
</body>
</html>