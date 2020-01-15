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
	<!--div class="logo">
		<img src="/img/logo.png" alt="">
	</div>
	<div class="mini-logo">
		<img src="/img/mini_logo.png" alt="">
	</div-->
	<ul style="margin-top: 100px">
<?
	$class = "active";
	foreach($aNavBar as $curr => $item) {

?>
		<li><a class="<?=$class?>" href="<?=$this->Html->url($item['url'])?>"><i class="fa <?=$item['icon']?>"></i> <em><?=$item['title']?></em></a></li>
<?
		$class = "";
	}
?>
		<!--li><a href="#1" class="active"><i class="fa fa-home"></i> <em>Главная</em></a></li>
		<li><a href="#7"><i class="fa fa-calendar-check-o"></i> <em>Новости</em></a></li>
		<li><a href="#3"><i class="fa fa-pencil"></i> <em>Статьи</em></a></li>
		<li><a href="#6"><i class="fa fa-briefcase"></i> <em>Услуги</em></a></li>
		<li><a href="#4"><i class="fa fa-image"></i> <em>Галерея</em></a></li>
		<li><a href="#2"><i class="fa fa-user"></i> <em>Обо мне</em></a></li>
		<li><a href="#5"><i class="fa fa-envelope"></i> <em>Контакты</em></a></li-->

	</ul>
</nav>

<div class="slides">
	<div class="slide" id="1"> <? /* style="background-image: url('/img/first_bg.jpg');" */?>
		<div class="content">
			<div class="container-fluid">
				<?=$this->fetch('content')?>
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
</body>
</html>