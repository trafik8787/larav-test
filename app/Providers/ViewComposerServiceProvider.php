<?php

namespace App\Providers;

use App\Http\Composers\NavigateHeader;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->ComposerNavigateHeader();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Композер вида для меню в хедере
     */
    public function ComposerNavigateHeader()
    {
        view()->composer('common.header', NavigateHeader::class);
    }
}
