<?php

namespace OFFLINE\Csp\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use OFFLINE\Csp\CspServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CspServiceProvider::class,
        ];
    }
}
