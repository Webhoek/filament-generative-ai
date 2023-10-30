<?php

namespace Webhoek\FilamentGenerativeAi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webhoek\FilamentGenerativeAi\FilamentGenerativeAi
 */
class FilamentGenerativeAi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webhoek\FilamentGenerativeAi\FilamentGenerativeAi::class;
    }
}
