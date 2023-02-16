<?php include('head.php') ?>

<body <?php body_class('overflow-x-hidden') ?>>
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
						'li_class'  => 'font-display uppercase tracking-wide text-2xl menu-item'
					));
					?>
				</div>
			</div>
		</nav>

		<?php if (is_front_page()) : ?>
			<div class="flex flex-col gap-12 md:gap-12 lg:gap-16 md:items-start">
				<h1 class="text-4xl md:text-6xl lg:text-7xl xl:text-7xl 2xl:text-[5.5rem] max-w-sm md:max-w-2xl lg:max-w-3xl xl:max-w-4xl">Elevating your brand through design</h1>
				<div class="flex flex-col md:flex-row justify-between gap-4 w-full">
					<div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
						<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button w-full">
							<div class="whitespace-nowrap">Let's collaborate!</div>
							<i class="ph-phone text-2xl"></i>
						</a>

						<a href="<?php echo get_theme_file_uri(); ?>/dist/downloads/resume.pdf" target="_blank" class="button bg-transparent text-primary border-none w-full px-0 py-0  border-b pb-2 border-transparent transition-all hover:border-primary">
							<div class="whitespace-nowrap">Resume</div>
							<i class="ph-download-simple text-2xl"></i>
						</a>
					</div>
					<a href="#cases" class="text-lg lg:text-xl items-center self-center justify-center gap-4 opacity-50 hidden md:flex border-b pb-2 border-transparent transition-all hover:border-primary">
						<div class="font-display uppercase whitespace-nowrap">Case studies</div>
						<i class="ph-arrow-bend-right-down animate-bounce"></i>
					</a>
				</div>
			</div>
			<?php include('bg-graphics.php') ?>
		<?php endif; ?>
	</header>