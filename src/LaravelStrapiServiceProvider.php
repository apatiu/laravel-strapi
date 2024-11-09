<?php

namespace Apatiu\LaravelStrapi;

use Apatiu\LaravelStrapi\Commands\LaravelStrapiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelStrapiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-strapi')
            ->hasConfigFile()
            ->hasCommand(LaravelStrapiCommand::class);
    }
}
