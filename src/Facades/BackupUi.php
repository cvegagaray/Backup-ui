<?php

namespace Claudio Vega\BackupUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Claudio Vega\BackupUi\BackupUi
 */
class BackupUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Claudio Vega\BackupUi\BackupUi::class;
    }
}
