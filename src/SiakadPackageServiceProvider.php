<?php

namespace Teguhpermadi\SiakadPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Teguhpermadi\SiakadPackage\Commands\SiakadPackageCommand;

class SiakadPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('siakad-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_siakad-package_table')
            ->hasCommand(SiakadPackageCommand::class);
    }
}