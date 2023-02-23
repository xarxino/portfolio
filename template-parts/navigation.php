<nav class="flex items-center justify-between">
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="font-display tracking-[-0.375rem] font-black text-4xl lg:text-5xl leading-none uppercase">Tom</a>
    <div class="flex flex-col">
        <button id="menuOpen" class="flex lg:hidden items-center gap-4">
            <div class="font-display font-medium text-base uppercase">Menu</div>
            <i data-feather="menu"></i>
        </button>
        <div id="navMenu" class="hidden h-screen w-full z-[9999] fixed inset-0 bg-primary text-white items-center justify-center lg:h-auto lg:static lg:flex lg:bg-inherit lg:text-inherit transition-all">
            <button id="menuClose" class="absolute top-6 right-4 p-4 lg:hidden">
                <span class="sr-only">Close menu</span>
                <i data-feather="x"></i>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'flex flex-col lg:flex-row items-center gap-8 md:gap-8 lg:gap-10 ',
                'li_class'  => 'font-display uppercase tracking-wide text-2xl menu-item'
            ));
            ?>
                <button class="dark-mode-toggle pb-2"></button>
        </div>
    </div>
</nav>