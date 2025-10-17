<header class="banner bg-primary text-secondary">
  <div class="container py-4">
    
    <div class="flex items-center justify-between">
      
      <div class="w-1/3">
        <a class="text-xl font-heading" href="<?php echo e(home_url('/')); ?>">
          <?php echo $siteName; ?>

        </a>
      </div>

      
      <div class="w-1/3 flex justify-center">
        <form role="search" method="get" class="w-full max-w-md" action="<?php echo e(esc_url(home_url('/'))); ?>">
          <label for="search" class="sr-only">Search</label>
          <input
            type="search"
            id="search"
            class="w-full px-4 py-2 rounded bg-white text-black"
            placeholder="Search..."
            value="<?php echo e(get_search_query()); ?>"
            name="s"
          />
        </form>
      </div>

      
      <div class="w-1/3 flex justify-end">
        <a href="<?php echo e(wc_get_cart_url()); ?>" class="relative group">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-white group-hover:fill-accent" viewBox="0 0 24 24">
            <path d="M6 6h15l-1.5 9h-13z"/><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/>
          </svg>
          
          <?php if(WC()->cart && WC()->cart->get_cart_contents_count()): ?>
            <span class="absolute -top-2 -right-2 text-xs bg-accent text-white rounded-full px-1">
              <?php echo e(WC()->cart->get_cart_contents_count()); ?>

            </span>
          <?php endif; ?>
        </a>
      </div>
    </div>
  </div>

  
  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="bg-primary text-secondary flex items-center">
      <div class="container">
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex gap-6 py-3', 'echo' => false]); ?>

      </div>
    </nav>
  <?php endif; ?>
</header><?php /**PATH /var/www/html/wp-content/themes/fmlk-custom-theme/resources/views/sections/header.blade.php ENDPATH**/ ?>