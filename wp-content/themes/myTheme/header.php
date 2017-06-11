<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo get_bloginfo('name')?>/<?php echo get_bloginfo('description')?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/main.min.css">

    <?php wp_head(); ?>
</head>
<body>
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<header class="main-head " data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo_container">
                        <?php dynamic_sidebar('logo') ?>

					</div>
					<button class="toggle_menu">
						<span class="sandwich">
						  <span class="sw-topper"></span>
						  <span class="sw-bottom"></span>
						  <span class="sw-footer"></span>
						</span>
					</button>
					<nav class="top_menu">
						<ul>
							<li><a class="fadeInUp" href="#">Обо мне</a></li>
							<li><a class="fadeInUp" href="#">Резюме</a></li>
							<li><a class="fadeInUp" href="#">Портфолио</a></li>
							<li><a class="fadeInUp" href="#">Контакты</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="top_name">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="info">
							<h1><?php echo get_bloginfo("name")?></h1>
							<p><?php echo  get_bloginfo("description")?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>