<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CustomStaticPathsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $staticPaths = config('static_paths.paths');

        foreach ($staticPaths as $path) {
            Blade::directive('static', function ($expression) use ($path) {
                return "<?php echo asset('$path/' . $expression); ?>";
            });
        }
    }
}
