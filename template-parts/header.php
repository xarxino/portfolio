<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Primary Meta Tags -->
	<title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?></title>
	<meta name="title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
	<meta name="description" content="Come check out my design world! As a freelance UI designer, I, Tom Graafmans, am thrilled to showcase my portfolio filled with eye-catching projects. Want to stay on top of UI trends? Take a look at my blog! And don't hesitate to reach out for your next design project - let's make it happen together.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://tomgraafmans.com/">
	<meta property="og:title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
	<meta property="og:description" content="Come check out my design world! As a freelance UI designer, I, Tom Graafmans, am thrilled to showcase my portfolio filled with eye-catching projects. Want to stay on top of UI trends? Take a look at my blog! And don't hesitate to reach out for your next design project - let's make it happen together.">
	<meta property="og:image" content="">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://tomgraafmans.com/">
	<meta property="twitter:title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
	<meta property="twitter:description" content="Come check out my design world! As a freelance UI design er, I, Tom Graafmans, am thrilled to showcase my portfolio filled with eye-catching projects. Want to stay on top of UI trends? Take a look at my blog! And don't hesitate to reach out for your next design project - let's make it happen together.">
	<meta property="twitter:image" content="">
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<header id="#top" class="<?php if (is_front_page()) : echo "full-height pb-8 md:pb-12 lg:pb-16 xl:pb-24";
								endif; ?>">
		<nav class="flex items-center justify-between">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="font-display tracking-[-0.375rem] font-black text-4xl lg:text-5xl leading-none uppercase">Tom</a>
			<div class="flex flex-col">
				<button id="menuOpen" class="flex lg:hidden items-center gap-4">
					<div class="font-display font-medium text-base uppercase">Menu</div>
					<i class="ph-list text-3xl"></i>
				</button>
				<div id="navMenu" class="hidden lg:flex bg-primary lg:bg-inherit text-white lg:text-inherit fixed z-50 lg:static inset-0 items-center justify-center">
					<button id="menuClose" class="absolute top-6 right-4 p-4 lg:hidden tracking">
						<i class="ph-x-fill"></i>
					</button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'header-menu',
						'menu_class' => 'flex flex-col lg:flex-row items-center gap-8 md:gap-8 lg:gap-10 ',
						'li_class'  => 'font-display uppercase tracking-wide text-2xl lg:hover:underline lg:hover:underline-offset-8'
					));
					?>
				</div>
			</div>
		</nav>

		<?php if (is_front_page()) : ?>
			<div class="flex flex-col gap-6 md:gap-12 lg:gap-16 md:items-start">
				<h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-7xl 2xl:text-[5.5rem] 2xl:max-w-4xl">Elevating your brand through design</h1>
				<div class="flex flex-col lg:flex-row lg:justify-between gap-6 w-full">
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">
						<div>Let's collaborate</div>
						<i class="ph-thumbs-up-light -rotate-12"></i>
					</a>
					<a href="#cases" class="flex items-center justify-center gap-4 opacity-50">
						<div class="font-display uppercase text-xl">Case studies</div>
						<i class="ph-arrow-bend-right-down"></i>
					</a>
				</div>
			</div>
		<?php endif; ?>
	</header>