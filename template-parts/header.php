<?php include('head.php') ?>

		<?php include('navigation.php') ?>

		<?php if (is_front_page()) : ?>
			<div class="flex flex-col gap-12 md:gap-12 lg:gap-16 md:items-start">
				<h1 class="text-4xl md:text-6xl lg:text-7xl xl:text-7xl 2xl:text-[5.5rem] max-w-sm md:max-w-2xl lg:max-w-3xl xl:max-w-4xl">Elevating your brand through design</h1>
				<div class="flex flex-col md:flex-row justify-between gap-4 w-full">
					<div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
						<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button-filled w-full">
							<div class="whitespace-nowrap">Let's collaborate!</div>
							<i data-feather="phone-call"></i>
						</a>
						<a href="<?php echo get_theme_file_uri(); ?>/src/downloads/resume.pdf" target="_blank" class="button">
							<div class="whitespace-nowrap">Resume</div>
							<i data-feather="download"></i>
						</a>
					</div>
					<a href="#cases" class="text-lg lg:text-xl items-center self-center justify-center gap-4 opacity-50 hidden md:flex border-b pb-2 border-transparent transition-all hover:border-primary">
						<div class="font-display uppercase whitespace-nowrap">Case studies</div>
						<i data-feather="arrow-down" class="animate-bounce"></i>
					</a>
				</div>
			</div>
			<?php include('bg-graphics.php') ?>
		<?php endif; ?>
	</header>