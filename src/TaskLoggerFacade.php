<?php

namespace Armcanada\TaskLogger;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ExecutionLog log(string $message)
 *
 * @see \Armcanada\TaskLogger\TaskLogger
 */
class TaskLoggerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tasklogger';
    }
}
