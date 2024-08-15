<?php

namespace Armcanada\TaskLogger;

use Armcanada\TaskLogger\Models\ExecutionLog;
use DateTime;

class TaskLogger
{
    /**
     * Adds an entry to the task execution log.
     */
    public function log(int $taskId, DateTime $start, ?DateTime $end, ?string $payload, bool $success, ?string $exception = null): ExecutionLog
    {
        return ExecutionLog::create([
            'ExID' => $taskId,
            'Start' => $start,
            'End' => $end,
            'Payload' => $payload,
            'Success' => $success,
            'Exception' => $exception,
        ]);
    }
}
