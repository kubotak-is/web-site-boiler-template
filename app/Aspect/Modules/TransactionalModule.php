<?php

namespace App\Aspect\Modules;

use Ytake\LaravelAspect\Modules\TransactionalModule as PackageTransactionalModule;

/**
 * Class TransactionalModule
 */
class TransactionalModule extends PackageTransactionalModule
{
    /** @var array */
    protected $classes = [
        \App\Services\UserRegistrationService::class,
        \App\Services\UserFacebookRegistrationService::class,
        \App\Services\UserTwitterRegistrationService::class,
        \App\Services\UserGoogleRegistrationService::class,
        \App\Services\UserGithubRegistrationService::class,
    ];
}