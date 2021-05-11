<?php

namespace Lostlink\LaravelBlockchain;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lostlink\LaravelBlockchain\LaravelBlockchain
 */
class LaravelBlockchainFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel_blockchain';
    }
}
