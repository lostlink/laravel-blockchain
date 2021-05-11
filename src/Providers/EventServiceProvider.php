<?php

namespace Lostlink\LaravelBlockchain\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Lostlink\LaravelBlockchain\Models\Block;
use Lostlink\LaravelBlockchain\Observers\BlockObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Block::observe(BlockObserver::class);

        parent::boot();
    }
}
