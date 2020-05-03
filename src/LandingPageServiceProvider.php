<?php

namespace EmilMoe\LandingPage;

use Illuminate\Support\ServiceProvider;
use EmilMoe\LandingPage\Components\Facts;
use EmilMoe\LandingPage\Components\Contact;
use EmilMoe\LandingPage\Components\FactBox;
use EmilMoe\LandingPage\Components\Features;
use EmilMoe\LandingPage\Components\Partners;
use EmilMoe\LandingPage\Components\FeatureBox;
use EmilMoe\LandingPage\Components\Highlights;
use EmilMoe\LandingPage\Components\HighlightBox;

class LandingPageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        view()->addNamespace('LandingPage', __DIR__ .'/resources/views');
        $this->loadRoutesFrom(__DIR__ .'/routes.php');

        $this->loadViewComponentsAs('landing-page', [
            Partners::class,
            Features::class,
            FeatureBox::class,
            Highlights::class,
            HighlightBox::class,
            Contact::class,
            Facts::class,
            FactBox::class,
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
