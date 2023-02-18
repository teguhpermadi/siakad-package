<?php

namespace Teguhpermadi\SiakadPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Teguhpermadi\SiakadPackage\SiakadPackage
 */
class SiakadPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Teguhpermadi\SiakadPackage\SiakadPackage::class;
    }
}
