<?php

namespace Parables\LaravelApiGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Parables\LaravelApiGenerator\Commands\LaravelApiGeneratorCommand;

class LaravelApiGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-api-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-api-generator_table')
            ->hasCommand(LaravelApiGeneratorCommand::class);
    }
}
