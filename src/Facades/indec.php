<?php

namespace ManuReta\indec\Facades;

use Illuminate\Support\Facades\Facade;

class indec extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'indec';
    }
}
