<?php get_template_part('template-parts/head', 'head') ?>
<header id="#top" class="<?php if (is_front_page()) : echo "h-screen pb-6 md:pb-8 lg:pb-12 xl:pb-16";
							endif; ?> container max-w-7xl pt-6 md:pt-8 lg:pt-12 xl:pt-16 w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">

	<?php get_template_part('template-parts/navigation', 'navigation') ?>

	<?php if (is_front_page()) : ?>
		<div class="flex flex-col gap-12 md:gap-12 lg:gap-16 md:items-start">
			<h1 class="text-4xl md:text-6xl lg:text-7xl xl:text-7xl 2xl:text-[5.5rem] max-w-sm md:max-w-2xl lg:max-w-3xl xl:max-w-4xl">Elevating your brand through design</h1>
			<div class="flex flex-col md:flex-row justify-between gap-4 w-full">
				<div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button-filled w-full">
						<div class="whitespace-nowrap">Let's collaborate!</div>
						<i data-feather="phone-call"></i>
					</a>
					<a href="<?php echo get_theme_file_uri(); ?>/src/downloads/resume_tomgraafmans.pdf" target="_blank" class="button">
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
		<svg width="100%" height="100%" viewBox="0 0 120% 120%" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 -z-50">
			<defs>
				<linearGradient id="gradientOne" x1="1000" y1="0" x2="1000" y2="2000" gradientUnits="userSpaceOnUse">
					<stop offset="0.1" stop-color="currentColor" />
					<stop offset="1" stop-color="currentColor" stop-opacity="0" />
				</linearGradient>
				<linearGradient id="gradientTwo" x1="1000" y1="0" x2="1000" y2="2000" gradientUnits="userSpaceOnUse">
					<stop offset="0.2" stop-color="currentColor" />
					<stop offset="1" stop-color="currentColor" stop-opacity="0" />
				</linearGradient>
				<linearGradient id="gradientThree" x1="100%" y1="0" x2="100%" y2="2000" gradientUnits="userSpaceOnUse">
					<stop offset="0.5" stop-color="currentColor" />
					<stop offset="1" stop-color="currentColor" stop-opacity="0" />
				</linearGradient>
			</defs>
			<circle class="opacity-[3%] dark:bg-gradient-to-t dark:from-white dark:opacity-[1.5%]" id="bgCircleOne" fill="url(#gradientOne)" />
			<circle class="opacity-[3%] dark:bg-gradient-to-t dark:from-white dark:opacity-[1.5%]" id="bgCircleTwo" fill="url(#gradientTwo)" />
			<circle class="opacity-[3%] dark:bg-gradient-to-t dark:from-white dark:opacity-[1.5%]" id="bgCircleThree" fill="url(#gradientThree)" />
		</svg>
	<?php endif; ?>
</header>