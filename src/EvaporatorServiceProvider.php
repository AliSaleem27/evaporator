<?php

namespace AliSaleem\Evaporator;

use AliSaleem\Evaporator\Commands\UploadCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EvaporatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('evaporator')
            ->hasConfigFile()
            ->hasCommand(UploadCommand::class);
    }
}
