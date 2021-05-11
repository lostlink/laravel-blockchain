<?php

namespace Lostlink\LaravelBlockchain;

use Lostlink\LaravelBlockchain\Commands\InitializeBlockchainCommand;
use Lostlink\LaravelBlockchain\Providers\EventServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBlockchainServiceProvider extends PackageServiceProvider
{
    public function register()
    {
        $this->app->register(EventServiceProvider::class);

        return parent::register();
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_blockchain')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_blockchain_blocks_table')
            ->hasCommand(InitializeBlockchainCommand::class);
    }
}
