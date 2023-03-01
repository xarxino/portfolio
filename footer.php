<footer class="bg-primary text-slate-50 dark:bg-dark-primary dark:text-dark-secondary">
    <div class="container max-w-7xl pt-12 pb-6 md:pt-16 md:pb-12 lg:pt-24 lg:pb-12 xl:pt-32 xl:pb-12 w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col gap-12 md:gap-16 lg:gap-24 xl:gap-32 justify-between">
        <div class="flex flex-col gap-8 md:gap-16 lg:gap-24 xl:gap-36 lg:flex-row justify-between">
            <div class="flex flex-col gap-6 lg:gap-8">
                <h2 class="lg:text-5xl xl:text-6xl">Ready to take your online presence to the next level?</h2>
                <p class="opacity-70">Want to unlock the full potential of your online presence? Tell me all about yourself and your goals. Let's make it happen!</p>
            </div>
            <div class="flex flex-col gap-4">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button-filled--white w-full">
                    <div class="whitespace-nowrap">Schedule a call</div>
                    <i data-feather="phone-call"></i>
                </a>
                <a href="<?php echo get_theme_file_uri(); ?>/src/downloads/resume_tomgraafmans.pdf" target="_blank" class="button-outlined--white w-full dark:border-dark-secondary">
                    <div class="whitespace-nowrap">Resume</div>
                    <i data-feather="download"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-6 md:gap-12 lg:gap-16 xl:gap-24">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 lg:gap-16">
                <a target="_blank" href="https://dribbble.com/varvino" class="font-display font text-2xl lg:text-3xl xl:text-4xl border-b-2 border-transparent transition-all pb-2 hover:border-slate-50 dark:hover:border-dark-secondary">Dribbble</a>
                <a target="_blank" href="https://www.linkedin.com/in/tomgraafmans/" class="font-display font text-2xl lg:text-3xl xl:text-4xl border-b-2 border-transparent transition-all pb-2 hover:border-slate-50 dark:hover:border-dark-secondary">LinkedIn</a>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-8">
                <div class="opacity-50">© <?php echo date('Y'); ?> &mdash; Tom Graafmans</div>
                <a href="#top" class="flex items-center justify-center gap-4 font-display font text-2xl lg:text-3xl border-b-2 border-transparent transition-all pb-2 hover:border-slate-50 dark:hover:border-dark-secondary">
                    <span>Back to top</span>
                    <i data-feather="arrow-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php get_template_part('template-parts/cookie-consent', 'cookie-consent') ?>


<?php wp_footer(); ?>

</body>

</html>