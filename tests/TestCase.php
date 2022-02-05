<?php

namespace AliSaleem\Evaporator\Tests;

use AliSaleem\Evaporator\EvaporatorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            EvaporatorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
