<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('badge', function ($expression) {
            list($expression, $type, $text) = explode(',', $expression, 3);
            $type = trim($type, " \t\n\r\0\x0B'\"");
            $text = trim($text, " \t\n\r\0\x0B'\"");

            $class = '';
            switch ($type) {
                case '0':
                    $class = 'bg-secondary badge badge-gray';
                    break;
                case '1':
                    $class = 'bg-success badge badge-success';
                    break;
                case '2':
                    $class = 'bg-danger badge badge-danger';
                    break;
                case '3':
                    $class = 'bg-info badge badge-info';
                    break;
                case '4':
                    $class = 'bg-warning badge badge-warning';
                    break;
            }

            return "<span class='badge $class '>$text</span>";
        });
    }
}
