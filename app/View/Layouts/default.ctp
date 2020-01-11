<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Moonlight CSS Website Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<?
	echo $this->Html->css(array(
		'bootstrap.min',
		'bootstrap-theme.min',
		'fontAwesome',
		'light-box',
		'main'
	));

	echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->fetch('css');

	echo $this->Html->script(array(
		'vendor/modernizr-2.8.3-respond-1.4.2.min',
		'vendor/jquery.1.11.0.min',
		'vendor/bootstrap.min',
		'vendor/plugins',
		'main',
	));
	echo $this->fetch('script');
?>
	<!--link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/fontAwesome.css">
	<link rel="stylesheet" href="css/light-box.css">
	<link rel="stylesheet" href="css/main.css"-->

	<!--script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>

	<script src="/js/plugins.js"></script>
	<script src="/js/main.js"></script-->
</head>

<body>

<div class="sequence">

	<div class="seq-preloader">
		<svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
	</div>

</div>


<nav>
	<div class="logo">
		<img src="/img/logo.png" alt="">
	</div>
	<div class="mini-logo">
		<img src="/img/mini_logo.png" alt="">
	</div>
	<ul>
		<li><a href="#1" class="active"><i class="fa fa-home"></i> <em>Главная</em></a></li>
		<li><a href="#7"><i class="fa fa-calendar-check-o"></i> <em>Новости</em></a></li>
		<li><a href="#3"><i class="fa fa-pencil"></i> <em>Статьи</em></a></li>
		<li><a href="#6"><i class="fa fa-briefcase"></i> <em>Услуги</em></a></li>
		<li><a href="#4"><i class="fa fa-image"></i> <em>Галерея</em></a></li>
		<li><a href="#2"><i class="fa fa-user"></i> <em>Обо мне</em></a></li>
		<li><a href="#5"><i class="fa fa-envelope"></i> <em>Контакты</em></a></li>
	</ul>
</nav>

<div class="slides">
	<div class="slide" id="1"> <? /* style="background-image: url('/img/first_bg.jpg');" */?>
		<div class="content first-content">
			<div class="container-fluid">
				<div class="col-md-3">
					<div class="author-image"><img src="/img/author_image.png" alt="Author Image"></div>
				</div>
				<div class="col-md-9">
					<h2>Добро пожаловать!</h2>
					<p>Please take a look at <strong><a rel="nofollow" href="https://www.toocss.com">Too CSS</a></strong> to see free template collections for you. Lorem ipsum <em>dolor sit amet</em>, consectetur adipiscing elit. <em>Sed vehicula blandit augue,</em> eu maximus odio tempus vitae.</p>
					<p>Please tell your friends about templatemo website. A variety of free CSS templates are available for immediate downloads.</p>
					<p>Phasellus vitae faucibus orci. Etiam eleifend orci sed faucibus semper. Cras varius dolor et augue fringilla, eu commodo sapien iaculis. Donec eget dictum tellus. <a href="#">Curabitur</a> a interdum diam. Nulla vestibulum porttitor porta.</p>
					<p>Nulla vitae interdum libero, vel posuere ipsum. Phasellus interdum est et dapibus tempus. Vestibulum malesuada lorem condimentum mauris ornare dapibus. Curabitur tempor ligula et <a href="#">placerat</a> molestie.</p>
					<div class="main-btn"><a href="#2">Read More</a></div>
					<div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">Our FB Page</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="content">
		<p>Разработка сайта: <a href="http://phppainkiller.ru">phppainkiller.ru</a></p>
	</div>
</div>

<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script-->
<script type="text/javascript">
	$(document).ready(function() {
		// navigation click actions
		$('.scroll-link').on('click', function(event){
			event.preventDefault();
			var sectionID = $(this).attr("data-id");
			scrollToID('#' + sectionID, 750);
		});
		// scroll to top action
		$('.scroll-top').on('click', function(event) {
			event.preventDefault();
			$('html, body').animate({scrollTop:0}, 'slow');
		});
		// mobile nav toggle
		$('#nav-toggle').on('click', function (event) {
			event.preventDefault();
			$('#main-nav').toggleClass("open");
		});
	});
	// scroll function
	function scrollToID(id, speed){
		var offSet = 0;
		var targetOffset = $(id).offset().top - offSet;
		var mainNav = $('#main-nav');
		$('html,body').animate({scrollTop:targetOffset}, speed);
		if (mainNav.hasClass("open")) {
			mainNav.css("height", "1px").removeClass("in").addClass("collapse");
			mainNav.removeClass("open");
		}
	}
	if (typeof console === "undefined") {
		console = {
			log: function() { }
		};
	}
</script>
</body>
</html>