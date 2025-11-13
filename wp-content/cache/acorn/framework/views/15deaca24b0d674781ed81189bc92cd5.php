<header class="banner pt-5 bg-primary text-secondary">
  <div class="container py-4">

    
    <div class="flex flex-wrap items-center justify-between">

      
      <div class="flex-1 min-w-[0]">
        <a class="text-xl font-heading inline-block" href="<?php echo e(home_url('/')); ?>">
          <img src="<?php echo e(get_stylesheet_directory_uri()); ?>/resources/images/FMLK.jpg" alt="Logo"
          class="w-32 md:w-40 lg:w-48 h-auto max-w-full object-contain rounded-4xl">
        </a>
      </div>

      
      <div class="hidden xl:flex flex-1 justify-end">
        <form role="search" method="get" class="w-full max-w-md" action="<?php echo e(esc_url(home_url('/'))); ?>">
          <label for="search" class="sr-only">Search</label>
          <input type="search" id="search"
                 class="w-full px-4 py-2 rounded bg-white text-black"
                 placeholder="Search..."
                 value="<?php echo e(get_search_query()); ?>"
                 name="s" />
        </form>
      </div>

      
      <div class="xl:hidden mt-2 flex-shrink-0">
        <button id="mobileMenuButton"
                class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-700
                       font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center"
                type="button">
          <svg id="hamburgerIcon" class="w-6 h-6 block" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
          </svg>
          <svg id="closeIcon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        
        <div id="mobileMenu" class="hidden absolute right-0 mt-2 bg-primary rounded shadow w-44 z-50">
          <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'flex flex-col gap-2 py-2',
              'container' => false,
              'echo' => false,
              'walker' => new App\Nav\Menu_Walker()
            ]); ?>

          <?php endif; ?>
        </div>
      </div>

      
      <div class="w-full xl:hidden mt-4">
        <form role="search" method="get" class="w-full max-w-md mx-auto" action="<?php echo e(esc_url(home_url('/'))); ?>">
          <label for="search" class="sr-only">Search</label>
          <input type="search" id="search"
                 class="w-full px-4 py-2 rounded bg-white text-black"
                 placeholder="Search..."
                 value="<?php echo e(get_search_query()); ?>"
                 name="s" />
        </form>
      </div>

    </div>
  </div>

  
  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="bg-primary text-secondary hidden xl:flex justify-center">
      <?php echo wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'flex gap-6 py-3',
        'container' => false,
        'echo' => false,
        'walker' => new App\Nav\Menu_Walker()
      ]); ?>

    </nav>
  <?php endif; ?>
</header>
<?php /**PATH /var/www/html/wp-content/themes/fmlk-custom-theme/resources/views/sections/header.blade.php ENDPATH**/ ?>