<?php

namespace ManuReta\indec\Tests;

use ManuReta\indec\Facades\indec;
use ManuReta\indec\ServiceProvider;
use Orchestra\Testbench\TestCase;

class indecTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'indec' => indec::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
