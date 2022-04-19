<?php

namespace ThantDev\PackageLaravelExample;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThantDev\PackageLaravelExample\Commands\PackageLaravelExampleCommand;

class PackageLaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_package-laravel-example_table')
            ->hasCommand(PackageLaravelExampleCommand::class);
    }
}
