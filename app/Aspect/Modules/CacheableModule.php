<?php

namespace App\Aspect\Modules;

use Ytake\LaravelAspect\Modules\CacheableModule as PackageCacheableModule;

/**
 * Class CacheableModule
 */
class CacheableModule extends PackageCacheableModule
{
    /** @var array */
    protected $classes = [
        // example
        // \App\Services\AcmeService::class
    ];
}
