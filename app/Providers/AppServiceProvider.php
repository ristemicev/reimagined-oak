<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Facades\TwillPermissions;
use A17\Twill\View\Components\Navigation\NavigationLink;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        TwillPermissions::setRoleEnum(\App\Models\Enums\UserRole::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $pages = Page::get()->toTree();
        View::share('pages', $pages);

        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('homepage')->title('Home Page')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')->title('Pages')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('events')->title('Events')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('reports')->title('Reports')
        );

        view()->composer('components.language_switcher', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
