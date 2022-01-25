<!DOCTYPE html>
<html lang="ja">

<head>
	<title>Lounge</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- リセットCSS -->
	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('/wp-content/themes/eight/reset.css'));?>">
	<!--CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('/wp-content/themes/eight/drawer.min.css'));?>">
	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('/wp-content/themes/eight/js/dist/zoomslider.css'));?>">
	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('/wp-content/themes/eight/magnific-popup.css'));?>">
	<link rel="stylesheet"
		href="<?php echo esc_url(home_url('/wp-content/themes/eight/style.css'));?>?<?php echo date('Ymd-Hi'); ?> ">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php
if (is_front_page() && is_home()) {
    $page = "home";
} elseif (is_single()) {
    $page = "single";
} else {
    $page = "other";
}
?>

<body class="drawer drawer--left">
	<div class="wrapper row" id="<?php echo $page?>">
		<aside class="side-menu col-md-2" id="side">
			<div class="hmenu">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only">toggle navigation</span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav">
					<ul class="drawer-menu">
						<li class="text-center drawerImg"><a href="/" title=""><img
									src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/sideLogoImgLG.png'));?>"
									alt=""></a></li>
						<?php if ($page == 'home'):?>
						<li class="text-center"><a href="#concept">Concept</a></li>
						<li class="text-center"><a href="#system">System</a></li>
						<li class="text-center"><a href="#about_us">About us</a></li>
						<li class="text-center"><a href="#access">Access</a></li>
						<li class="text-center"><a href="#gallery">Gallery</a></li>
						<li class="text-center"><a href="#news">News</a></li>
						<li class="text-center"><a href="#blog">Blog</a></li>
						<li class="text-center"><a href="#recruit">Recruit</a></li>
						<li class="text-center"><a href="#contact">Contact</a></li>
						<?php else:?>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#concept">Concept</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#system">System</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#about_us">About
								us</a></li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#access">Access</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#gallery">Gallery</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#news">News</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#blog">Blog</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#recruit">Recruit</a>
						</li>
						<li class="text-center"><a
								href="<?php get_template_directory_uri()?>/#contact">Contact</a>
						</li>
						<?php endif?>
					</ul>
				</nav>
			</div>
			<div class="side-Logo">
				<a href="/" title=""><img
						src="<?php echo esc_url(home_url('/wp-content/themes/eight/img/sideLogoImgLG.png'));?>"
						alt=""></a>
			</div>
			<ul class="sideMenu-list">
				<?php if ($page == 'home'):?>
				<li class="text-center"><a href="#concept">Concept</a></li>
				<li class="text-center"><a href="#system">System</a></li>
				<li class="text-center"><a href="#about_us">About us</a></li>
				<li class="text-center"><a href="#access">Access</a></li>
				<li class="text-center"><a href="#gallery">Gallery</a></li>
				<li class="text-center"><a href="#news">News</a></li>
				<li class="text-center"><a href="#blog">Blog</a></li>
				<li class="text-center"><a href="#recruit">Recruit</a></li>
				<li class="text-center"><a href="#contact">Contact</a></li>
				<?php else:?>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#concept">Concept</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#system">System</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#about_us">About
						us</a></li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#access">Access</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#gallery">Gallery</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#news">News</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#blog">Blog</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#recruit">Recruit</a>
				</li>
				<li class="text-center"><a
						href="<?php get_template_directory_uri()?>/#contact">Contact</a>
				</li>
				<?php endif?>
			</ul>
		</aside>