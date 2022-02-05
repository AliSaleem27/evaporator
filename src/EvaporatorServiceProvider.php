<?php

namespace AliSaleem\Evaporator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AliSaleem\Evaporator\Commands\UploadCommand;

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
