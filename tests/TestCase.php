<?php

namespace Vladmeh\Package\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Vladmeh\Package\PackageServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class
        ];
    }
}