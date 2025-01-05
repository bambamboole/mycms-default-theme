<?php

namespace Bambamboole\MyCmsDefaultTheme;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MyCmsDefaultThemeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mycms-default-theme')
            ->hasViews()
            ->hasMigrations(['../settings/create_social_settings']);
    }
}
