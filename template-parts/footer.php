<footer class="bg-primary text-white">
    <div class="container max-w-7xl pt-12 pb-6 md:pt-16 md:pb-12 lg:pt-24 lg:pb-12 xl:pt-32 xl:pb-12 w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col gap-12 md:gap-16 lg:gap-24 xl:gap-32 justify-between">
        <div class="flex flex-col gap-8 md:gap-16 lg:gap-24 xl:gap-36 lg:flex-row justify-between">
            <div class="flex flex-col gap-6 lg:gap-8">
                <h2 class="lg:text-5xl xl:text-6xl">Ready to take your online presence to the next level?</h2>
                <p class="text-white/70">Want to unlock the full potential of your online presence? Tell me all about yourself and your goals. Let's make it happen!</p>
            </div>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button bg-white text-primary lg:self-center">
                <div class="lg:whitespace-nowrap">Schedule a call</div>
                <i class="ph-phone"></i>
            </a>
        </div>
        <div class="flex flex-col gap-6 md:gap-12 lg:gap-16 xl:gap-24">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 lg:gap-16">
                <a target="_blank" href="https://dribbble.com/varvino" class="font-display font-light text-2xl lg:text-3xl xl:text-4xl">Dribbble</a>
                <a target="_blank" href="https://www.linkedin.com/in/tomgraafmans/" class="font-display font-light text-2xl lg:text-3xl xl:text-4xl">LinkedIn</a>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-8">
                <div class="opacity-50">© <?php echo date('Y'); ?> &dash; Tom Graafmans</div>
                <a href="#top" class="flex justify-center items-center self-start gap-4 pb-4 border-b border-white text-2xl">
                    <div class="font-display">Back to top</div>
                    <i class="ph-arrow-bend-right-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>