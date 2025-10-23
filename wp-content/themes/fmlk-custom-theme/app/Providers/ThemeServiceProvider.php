<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        /**
         * Fix for WordPress 6.7+ translation timing notice.
         * Load Sage textdomain after 'after_setup_theme' instead of during early boot.
         */
        add_action('after_setup_theme', function () {
            load_theme_textdomain('sage', get_template_directory() . '/lang');
        }, 20);
    }
}
